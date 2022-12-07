<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FakeStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://fakestoreapi.com/products');
        $data = json_decode($response->getBody()->getContents());
        // dd($data);
        return view('index', ['data' => $data]);
    }

    public function getSingleProduct($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://fakestoreapi.com/products/' . $id);
        $data = json_decode($response->getBody()->getContents());
        dd($data);
        return view('index', ['data' => $data]);
    }


    public function addProduct()
    {
        $client = new Client();
        $response = $client->request('POST', 'https://fakestoreapi.com/products', [
            'headers' => [
                'Accept' => 'aplication/json'
            ],
            'json' => [
                'title' => 'test product',
                'price' => 13.5,
                'description' => 'lorem ipsum set',
                'image' => 'https://i.pravatar.cc',
                'category' => 'electronic'
            ]
        ]);


        $data = json_decode($response->getBody()->getContents());
        dd($data);
    }


    public function updateProduct($id) {
        $client = new Client();
        $response = $client->request('PUT', 'https://fakestoreapi.com/products/' . $id, [
            'headers' => [
                'Accept' => 'aplication/json'
            ],
            'json' => [
                'title' => 'test update put',
                'price' => 13.5,
                'description' => 'lorem ipsum set put',
                'image' => 'https://i.pravatar.cc',
                'category' => 'electronic'
            ]
        ]);


        $data = json_decode($response->getBody()->getContents());
        dd($data);
    }
}