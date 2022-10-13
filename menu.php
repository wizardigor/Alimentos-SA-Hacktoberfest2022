<?php
class Menu{
    function getNavbar(){
        return "
        <nav class='navbar navbar-light bg-light'>
        <a class='navbar-brand' href='#'>
            <img src='img/logo.png' width='35' height='35' class='d-inline-block align-top' alt=''>
            Alimentos S.A.
        </a>
        <button type='button' class='btn btn-danger'>Adicionar</button>
        </nav>
        ";
    }
}