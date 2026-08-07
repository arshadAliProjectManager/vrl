<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking extends MX_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $data['title'] = "Track Shipment Online | Live Relocation Status | " . $this->comp['company3'];
        $data['description'] = "Track your shifting consignment online with " . $this->comp['company3'] . ". Enter tracking ID or LR number for real-time updates on household shifting, car transport, or cargo shipping.";
        $data['keywords'] = "track shipment, tracking status, LR number tracking, live moving status, " . $this->comp['company3'];
        $data['module'] = "tracking";
        $data['view_file'] = "tracking";
        echo Modules::run('template/layout2', $data);
    }

    public function track() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('trackingNumber', 'Tracking ID', 'required|trim');

        if ($this->form_validation->run() == true) {
            $this->load->model('tracking_mdl');
            $data = $this->tracking_mdl->trackings();

            if ($data) {
                $response = [
                    'status' => 'success',
                    'main' => [
                        'tracking_id' => !empty($data[0]['tracking_id']) ? $data[0]['tracking_id'] : (!empty($data[0]['lr_no']) ? $data[0]['lr_no'] : $data[0]['gr_no']),
                        'lr_no' => !empty($data[0]['lr_no']) ? $data[0]['lr_no'] : $data[0]['gr_no'],
                        'c_name' => $data[0]['c_name'],
                        'ship_from' => $data[0]['ship_from'],
                        'ship_to' => $data[0]['ship_to'],
                        'ship_type' => $data[0]['ship_type'],
                        'ex_del_date' => $data[0]['ex_del_date']
                    ],
                    'timeline' => []
                ];
                foreach ($data as $row) {
                    $response['timeline'][] = [
                        'type' => $row['type'],
                        'date' => $row['date'],
                        'time' => $row['time'],
                        'place' => $row['place'],
                        'remarks' => $row['remarks']
                    ];
                }
                echo json_encode($response);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Tracking number not found']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
        }
    }
}
