<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    function submit(ContactRequest $req) {
      $contact = new Contact();
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->title = $req->input('title');
      $contact->message = $req->input('message');

      $contact->save();

      return redirect()->route('home')->with('success', 'Повідомлення було відправлено');
    }

    function allData() {
      $contact = new Contact;
      return view('messages',  ['data' => $contact->orderBy('id', 'asc')->get()]);
    }

    function showOneMessage($id) {
      $contact = new Contact;
      return view('one-message', ['data' => $contact->find($id)]);
    }

    function updatemessage($id) {
      $contact = new Contact;
      return view('update-message', ['data' => $contact->find($id)]);
    }


    function updateMessageSubmit($id, ContactRequest $req) {
      $contact = Contact::find($id);
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->title = $req->input('title');
      $contact->message = $req->input('message');

      $contact->save();

      return redirect()->route('contact-data-one', $id)->with('success', 'Повідомлення оновлено');
    }

    function deleteMessage($id) {
      Contact::find($id)->delete();
      return redirect()->route('contact-data', $id)->with('success', 'Повідомлення видалено');
    }
}
