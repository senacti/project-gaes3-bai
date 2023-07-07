<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\PDF;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all_events = Event::all();

        $events = [];

        foreach ($all_events as $event) {
            $events[] = [
                'title' => $event->event,
                'start' => $event->start_date,
                'end' => $event->end_date,

            ];
        }

        return view('evento.index', compact('events'));
    }

public function pdf()
{
    $events = Event::all();

    $pdf = Pdf::loadView('evento.pdf', compact('events'));
    return $pdf->stream();

}
}
