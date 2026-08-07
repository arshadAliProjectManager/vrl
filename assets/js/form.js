document.addEventListener("DOMContentLoaded", function () {
    // Inject custom validation styles
    if (!document.getElementById("validation-custom-styles")) {
        const style = document.createElement("style");
        style.id = "validation-custom-styles";
        style.innerHTML = `
            .input-error-highlight {
                border-color: #ff3344 !important;
                background: rgba(255, 51, 68, 0.08) !important;
                box-shadow: 0 0 12px rgba(255, 51, 68, 0.35) !important;
                transition: all 0.3s ease-in-out !important;
            }
            .field-error-msg {
                color: #ff6b6b !important;
                font-size: 11px !important;
                font-weight: 700 !important;
                margin-top: 5px !important;
                margin-bottom: 2px !important;
                padding: 4px 8px !important;
                background: rgba(255, 51, 68, 0.15) !important;
                border: 1px solid rgba(255, 51, 68, 0.35) !important;
                border-radius: 6px !important;
                display: inline-flex !important;
                align-items: center !important;
                gap: 5px !important;
                width: 100% !important;
                box-sizing: border-box !important;
                line-height: 1.3 !important;
                animation: fieldErrorFadeIn 0.25s ease-out !important;
            }
            @keyframes fieldErrorFadeIn {
                from { opacity: 0; transform: translateY(-4px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    }

    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Clear previous errors and highlights
            form.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
            form.querySelectorAll(".field-error-msg").forEach(el => el.remove());

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            
            // Get fields
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');

            let hasErrors = false;

            // Helper to show field error
            function showError(inputEl, message) {
                if (!inputEl) return;
                inputEl.classList.add("input-error-highlight");
                
                const errorDiv = document.createElement("div");
                errorDiv.className = "field-error-msg";
                errorDiv.innerHTML = `<i class="bi bi-exclamation-circle-fill"></i> ${message}`;
                
                // Find the wrapper (either .vrl-input-col, .field-wrap, .form-group, or parent)
                const wrapper = inputEl.closest(".vrl-input-col") || inputEl.closest(".field-wrap") || inputEl.closest(".form-group") || inputEl.parentElement;
                
                // Force wrap if wrapper is a flex container
                const computedStyle = window.getComputedStyle(wrapper);
                if (computedStyle.display === "flex") {
                    wrapper.style.flexWrap = "wrap";
                }
                
                // Append inside the wrapper
                wrapper.appendChild(errorDiv);
            }

            // Validate Name
            if (nameInput) {
                const val = nameInput.value.trim();
                if (!val) {
                    showError(nameInput, "The Name field is required.");
                    hasErrors = true;
                }
            }

            // Validate Phone
            if (phoneInput) {
                const val = phoneInput.value.trim();
                if (!val) {
                    showError(phoneInput, "The Mobile field is required.");
                    hasErrors = true;
                } else if (!/^\d+$/.test(val)) {
                    showError(phoneInput, "The Mobile field must contain only numbers.");
                    hasErrors = true;
                } else if (val.length !== 10) {
                    showError(phoneInput, "The Mobile field must be exactly 10 digits.");
                    hasErrors = true;
                }
            }

            if (hasErrors) {
                if (resultBox) {
                    resultBox.innerHTML = ""; // Clear loader/previous messages
                }
                return; // Stop form submission
            }

            const formData = new FormData(this);

            // Show loader
            if (resultBox) {
                resultBox.innerHTML = "<p style='color:orange; font-weight:bold; font-size:0.9rem; padding: 10px;'>Please wait...</p>";
            }

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                if (data.trim() === "1") {
                    data = `
                        <div class='alert alert-success' style='margin-top: 15px;'>
                        <p style='color:green; font-weight:bold; margin-bottom: 0;'>Thank you! Your request has been submitted successfully.</p>
                        </div>
                    `;
                    form.reset();
                }

                if (resultBox) {
                    resultBox.innerHTML = data;
                    setTimeout(() => resultBox.innerHTML = "", 8000);
                }
            })
            .catch(err => {
                if (resultBox) {
                    resultBox.innerHTML = "<p style='color:red; font-weight:bold;'>Something went wrong!</p>";
                }
            });

        });

    });

});
