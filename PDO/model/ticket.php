<?php

class Ticket {
    
    private $id_ticket;
    private $ticket_number;
    private $client_id;
    private $device_id;
    private $status_id;
    private $priority_id;
    private $created_by;

    public function __construct($id_ticket, $ticket_number, $client_id, $device_id, $status_id, $priority_id, $created_by) {
        $this->id_ticket = $id_ticket;
        $this->ticket_number = $ticket_number;
        $this->client_id = $client_id;
        $this->device_id = $device_id;
        $this->status_id = $status_id;
        $this->priority_id = $priority_id;
        $this->created_by = $created_by;
    }

    // Getters
    public function getId_ticket() { return $this->id_ticket; }
    public function getTicket_number() { return $this->ticket_number; }
    public function getClient_id() { return $this->client_id; }
    public function getDevice_id() { return $this->device_id; }
    public function getStatus_id() { return $this->status_id; }
    public function getPriority_id() { return $this->priority_id; }
    public function getCreated_by() { return $this->created_by; }

    // Setters
    public function setId_ticket($id_ticket) { $this->id_ticket = $id_ticket; }
    public function setTicket_number($ticket_number) { $this->ticket_number = $ticket_number; }
    public function setClient_id($client_id) { $this->client_id = $client_id; }
    public function setDevice_id($device_id) { $this->device_id = $device_id; }
    public function setStatus_id($status_id) { $this->status_id = $status_id; }
    public function setPriority_id($priority_id) { $this->priority_id = $priority_id; }
    public function setCreated_by($created_by) { $this->created_by = $created_by; }
}
