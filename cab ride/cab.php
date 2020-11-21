<?php
$distance = array(
    "Charbagh" => "0",
    "Indira Nagar" => "10",
    "BBD" => "30",
    "Barabanki" => "60",
    "Faizabad" => "100",
    "Basti" => "150",
    "Gorakhpur" => "210"
);
$p = 0;$d = 0;$dist = 0;
$pick = isset($_POST['pick']) ? $_POST['pick'] : '';
$drop = isset($_POST['drop']) ? $_POST['drop'] : '';
$cabType = isset($_POST['cabType']) ? $_POST['cabType'] : '';
$lug = isset($_POST['lug']) ? $_POST['lug'] : '';
foreach ($distance as $key => $value)
{
    if ($key == $pick)
    {
        $p = $value;
    }
    if ($key == $drop)
    {
        $d = $value;
    }
}
$dist = abs($p - $d);
echo 'Total Distance:- ' . $dist . 'km<br>';
if ($cabType == 'CedMicro')
{
    $bookAmount = 50;
    if ($dist <= 10)
    {
        $amt = $bookAmount + $dist * 13.50;
    }
    if ($dist > 10 && $dist <= 60)
    {
        $amt = $bookAmount + (10 * 13.50);
        $dist = $dist - 10;
        $amt = $amt + ($dist * 12.00);
    }
    if ($dist > 60 && $dist <= 160)
    {
        $amt = $bookAmount + (10 * 13.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 12.00);
        $dist = $dist - 50;
        $amt = $amt + ($dist * 10.20);
    }
    if ($dist > 160)
    {
        $amt = $bookAmount + (10 * 13.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 12.00);
        $dist = $dist - 50;
        $amt = $amt + (100 * 10.20);
        $dist = $dist - 100;
        $amt = $amt + ($dist * 8.50);
    }

}
elseif ($cabType == 'CedMini')
{
    $bookAmount = 150;
    if ($dist <= 10)
    {
        $amt = $bookAmount + $dist * 14.50;
    }
    if ($dist > 10 && $dist <= 60)
    {
        $amt = $bookAmount + (10 * 14.50);
        $dist = $dist - 10;
        $amt = $amt + ($dist * 13.00);
    }
    if ($dist > 60 && $dist <= 160)
    {
        $amt = $bookAmount + (10 * 14.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 13.00);
        $dist = $dist - 50;
        $amt = $amt + ($dist * 11.20);
    }
    if ($dist > 160)
    {
        $amt = $bookAmount + (10 * 14.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 13.00);
        $dist = $dist - 50;
        $amt = $amt + (100 * 11.20);
        $dist = $dist - 100;
        $amt = $amt + ($dist * 9.50);
    }
}
elseif ($cabType == 'CedRoyal')
{
    $bookAmount = 200;
    if ($dist <= 10)
    {
        $amt = $bookAmount + $dist * 15.50;
    }
    if ($dist > 10 && $dist <= 60)
    {
        $amt = $bookAmount + (10 * 15.50);
        $dist = $dist - 10;
        $amt = $amt + ($dist * 14.00);
    }
    if ($dist > 60 && $dist <= 160)
    {
        $amt = $bookAmount + (10 * 15.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 14.00);
        $dist = $dist - 50;
        $amt = $amt + ($dist * 12.20);
    }
    if ($dist > 160)
    {
        $amt = $bookAmount + (10 * 15.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 14.00);
        $dist = $dist - 50;
        $amt = $amt + (100 * 12.20);
        $dist = $dist - 100;
        $amt = $amt + ($dist * 10.50);
    }
}
elseif ($cabType == 'CedSUV')
{
    $bookAmount = 250;
    if ($dist <= 10)
    {
        $amt = $bookAmount + $dist * 16.50;
    }
    if ($dist > 10 && $dist <= 60)
    {
        $amt = $bookAmount + (10 * 16.50);
        $dist = $dist - 10;
        $amt = $amt + ($dist * 15.00);
    }
    if ($dist > 60 && $dist <= 160)
    {
        $amt = $bookAmount + (10 * 16.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 15.00);
        $dist = $dist - 50;
        $amt = $amt + ($dist * 13.20);
    }
    if ($dist > 160)
    {
        $amt = $bookAmount + (10 * 16.50);
        $dist = $dist - 10;
        $amt = $amt + (50 * 15.00);
        $dist = $dist - 50;
        $amt = $amt + (100 * 13.20);
        $dist = $dist - 100;
        $amt = $amt + ($dist * 11.50);
    }
}
if ($cabType == 'CedMini' || $cabType == 'CedRoyal')
{
    if ($lug == "")
    {
        $amt = $amt + 0;
    }
    elseif ($lug <= 10)
    {
        $amt = $amt + 50;

    }
    elseif ($lug > 10 && $lug <= 20)
    {
        $amt = $amt + 100;
    }
    elseif ($lug > 20)
    {
        $amt = $amt + 200;
    }
}
if ($cabType == 'CedSUV')
{
    if ($lug == "")
    {
        $amt = $amt + 0;
    }
    elseif ($lug <= 10)
    {
        $amt = $amt + 100;

    }
    elseif ($lug > 10 && $lug <= 20)
    {
        $amt = $amt + 200;
    }
    elseif ($lug > 20)
    {
        $amt = $amt + 400;
    }
}
echo 'Total Amount: $ ' . $amt; ?>