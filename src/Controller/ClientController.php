<?php

namespace App\Controller;

use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; // Ajoutez cette ligne

class ClientController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/client/{email}", name="get_client_by_email", methods={"GET"})
     */
    public function getClientByEmail(string $email): JsonResponse
    {
        $clientRepository = $this->entityManager->getRepository(Client::class);
        $client = $clientRepository->findOneBy(['email' => $email]);

        if (!$client) {
            return new JsonResponse(['error' => 'Client not found'], 404);
        }

        $responseData = [
            'id' => $client->getId(),
            'nom' => $client->getNom(),
            'prenom' => $client->getPrenom(),
            'email' => $client->getEmail(),
            'password' => $client->getPassword(),
            'tel' => $client->getTel(),
            'admin' => $client->getAdmin(),
            'documents' => $client->getDocuments(),
        ];

        return new JsonResponse($responseData);
    }
}
