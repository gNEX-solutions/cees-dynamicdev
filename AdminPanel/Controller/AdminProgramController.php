<?php
include 'Repository/CurrencyRepository.php';

class AdminProgramController
{

    public function getCurrency()
    {
        $currencyRepo=new CurrencyRepository();
        return $currencyRepo->getCurrency();
    }
}