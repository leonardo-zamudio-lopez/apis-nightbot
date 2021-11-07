<?php

// Randog Breed API for Nightbot by Leonardo Zamudio
// MIT License

$option = $_GET["query"];
$credits = "Random Dog Breed Nightbot API developed by Leonardo Zamudio ( @LeoZMD )";
$breeds = array("Affenpinscher", "Afghan hound", "Airedale terrier", "Akita", "Alaskan malamute", 
"American staffordshire terrier", "American water spaniel", "Australian cattle dog", 
"Australian shepherd", "Australian terrier", "Basenji", "Basset hound", "Beagle", "Bearded collie", 
"Bedlington terrier", "Bernese mountain dog", "Bichon frise", "Black and tan coonhound", "Bloodhound", 
"Border collie", "Border terrier", "Borzoi", "Boston terrier", "Bouvier des flandres", "Boxer", 
"Briard", "Brittany", "Brussels griffon", "Bull terrier", "Bulldog", "Bullmastiff", "Cairn terrier", 
"Canaan dog", "Chesapeake bay retriever", "Chihuahua", "Chinese crested", "Chinese shar-pei", 
"Chow chow", "Clumber spaniel", "Cocker spaniel", "Collie", "Curly-coated retriever", "Dachshund", 
"Dalmatian", "Doberman pinscher", "English cocker spaniel", "English setter", 
"English springer spaniel", "English toy spaniel", "Eskimo dog", "Finnish spitz", 
"Flat-coated retriever", "Fox terrier", "Foxhound", "French bulldog", "German shepherd", 
"German shorthaired pointer", "German wirehaired pointer", "Golden retriever", "Gordon setter", 
"Great dane", "Greyhound", "Irish setter", "Irish water spaniel", "Irish wolfhound", 
"Jack russell terrier", "Japanese spaniel", "Keeshond", "Kerry blue terrier", "Komondor", "Kuvasz", 
"Labrador retriever", "Lakeland terrier", "Lhasa apso", "Maltese", "Manchester terrier", "Mastiff", 
"Mexican hairless", "Newfoundland", "Norwegian elkhound", "Norwich terrier", "Otterhound", "Papillon", 
"Pekingese", "Pointer", "Pomeranian", "Poodle", "Pug", "Puli", "Rhodesian ridgeback", "Rottweiler", 
"Saint bernard", "Saluki", "Samoyed", "Schipperke", "Schnauzer", "Scottish deerhound", 
"Scottish terrier", "Sealyham terrier", "Shetland sheepdog", "Shih tzu", "Siberian husky", 
"Silky terrier", "Skye terrier", "Staffordshire bull terrier", "Soft-coated wheaten terrier", 
"Sussex spaniel", "Spitz", "Tibetan terrier", "Vizsla", "Weimaraner", "Welsh terrier", 
"West highland white terrier", "Whippet", "Yorkshire terrier");
$help = "Bitch what kind of dog is THAT";

if(isset($option) && $option != "") {
    if($option == "credits") {
        echo $credits;
    } else {
        echo $help;
    }
} else if ($option == "") {
    echo $breeds[array_rand($breeds)];
}

?>