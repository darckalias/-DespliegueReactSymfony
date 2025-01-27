<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class IEHController
{
#[Route('/api/IEH', name: 'api_IEH')]
public function index(): Response
{
return new Response('Symfony de ILYAS EL HAYANI Responde a la llamada de
React');
}
}