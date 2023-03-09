<?php

class Manager {

    private $db;

    public function __construct($db)
    {
        this->db = $db;
    }

    public function add(Review $review, TourOperator $tour_operator)
    {

        $q = $this->db->prepare('INSERT INTO reviews(message,author, note, id_tour_operator) VALUES(:message, :author, :note, :id_tour_operator)');

        $q->bindValue(':message', $review->getMessage());
        $q->bindValue(':author', $review->getAuthor());
        $q->bindValue(':note', $review->getNote());
        $q->bindValue(':tour_operator_id', $review->getTour_Operator_Id());

        $q->execute();

        $review->hydrate([
            'id' => $this->db->lastInsertId()
        ]);
    }

    public function getList(TourOperator $tour_operator)
    {
        $reviews = [];

        $q = $this->db->prepare('SELECT reviews.* FROM `reviews` JOIN tour_operator ON reviews.tour_operator_id = tour_operators.id WHERE tour_operators.id = ?)
    }