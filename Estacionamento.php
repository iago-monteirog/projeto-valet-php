<?php

class Estacionamento
{
    private static $tickets = [];

    public function adiciona($ticket)
    {
        self::$tickets[] = $ticket;
    }

    public function consultaTodos()
    {
        return self::$tickets;
    }

    public function consultaPorId($id)
    {
        foreach(self::$tickets as $ticket)
        {
            if($ticket->$id == $id) return $ticket;
        }
        return null;
    }
}