<?php


$contacts = [] ;

function addContact(array &$contacts , string $name , string $email , $phone ):void
{
    $contacts[] =  ['name' => $name , 'email' => $email , 'phone' =>$phone ] ;

    // array_push( $contacts, ['name' => $name , 'email' => $email , 'phone' =>$phone ]);
}


function displayContacts(array $contacts):void
{
    if(empty($contacts)){
        echo "NO Contacts Available./n";
    }else{
        foreach($contacts as $contact){
            echo "
            Name : {$contact['name']},
            Email : {$contact['email']},
            Phone : {$contact['phone']} /n,

            ";

        }
    }
}


while(true){
    echo "/nContact Management App";
    echo "1. Add Contact /n2.View Contact /n3.Exit";
    $choice = (int)readline("Choose An Option : ");

if ($choice === 1) {
    $name =readline("Enter Name : ");
    $email =readline("Enter Email : ");
    $phone =readline("Enter Phone Number : ");

    addContact($contact , $name , $email , $phone);
    echo "$name Name added to contacts ./n";
    echo "$email Email added to contacts ./n";
    echo "$phone Number added to contacts ./n";
}elseif ($choice === 2) {
    displayContacts($contacts);
}elseif ($choice === 3){
    echo "Exiting.../n" ;
}else {
    echo "Invalid choice. Please try again.";
}


}