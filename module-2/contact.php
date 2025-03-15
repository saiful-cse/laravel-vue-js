<?php
$contacts = [];

function addContact(array &$contacts,  $name,  $email, $phone)
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

function displayContact($contacts): void
{
    if (empty($contacts)) {
        echo "No Contacts available";
    } else {
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
        }
    }
}

while (true) {
    echo "\nContact management App\n";
    echo "1. Add Contact\n2. View Contact\n3. Exit \n";
    $choice = (int)readline("Choice an Option: ");

    if ($choice === 1) {
        $name = readline("Enter name ");
        $email = readline("Enter email ");
        $phone = readline("Enter phone ");
        addContact($contacts, $anme, $email, $phone);

        echo "$name added to contact\n";
        echo "$email added to contact\n";
        echo "$phone added to contact\n";
    } else if ($choice === 2) {
        displayContact($contacts);
    } else {
        echo "Exiting........";
        break;
    }
}
