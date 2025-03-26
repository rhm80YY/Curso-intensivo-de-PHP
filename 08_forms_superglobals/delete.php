<?php
if (isset($_GET['id'])) { 
    $contactsFiles = 'contacts.json';
    $contacts = file_exists($contactsFiles) ? 
                json_decode(file_get_contents($contactsFiles), true) : [];

    // Remove the contact by id
    $contacts = array_filter($contacts, fn($c) => $c['id'] !== (int)$_GET['id']);

    file_put_contents($contactsFiles, json_encode($contacts, JSON_PRETTY_PRINT));
    echo "Contact deleted";
    
}