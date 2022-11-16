<?php
$key         = 123456;
$max         = 1;
$permissions = 0666;
$autoRelease = 1;
 
//Open a new or get an existing semaphore
$semaphore = sem_get
if (!$semaphore) {
    echo "Failed on sem_get().\n";
    exit;
}
 
//Try to aquire the semaphore.
for ($i = 0; $i < 2; $i++) {
    echo "\nAttempting to acquire semaphore...\n";
    sem_acquire($semaphore);
 
    echo "Aquired.\n";
    echo "Enter some text: ";
    $handler = fopen("php://stdin", "r");
    $text    = fgets($handler);
 
    fclose($handler);
    sem_release($semaphore);
 
    echo "Got: $text \n";
}