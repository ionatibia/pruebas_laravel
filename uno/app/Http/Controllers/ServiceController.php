<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function showServices()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function createServices()
    {
        $service = new Service;
        $service->title = 'Servicio 1';
        $service->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorem tenetur minus, maxime ullam doloremque cupiditate eum? Iusto, necessitatibus! Veritatis, itaque nemo. Accusamus ex eligendi ea at labore voluptatem aperiam.';
        $service->done = (bool)0;
        $service->save();

        Service::create([
            "title" => "Servicio 2",
            "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorem tenetur minus, maxime ullam doloremque cupiditate eum? Iusto, necessitatibus! Veritatis, itaque nemo. Accusamus ex eligendi ea at labore voluptatem aperiam.',
            "done" => (bool)1
        ]);

        return redirect()->route('services');
    }
}
