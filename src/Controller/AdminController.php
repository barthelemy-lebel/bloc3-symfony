<?php

namespace App\Controller;

use App\Entity\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; // Ajoutez cette ligne

class AdminController extends AbstractController
{
    private EntityManagerInterface $entityManager; // Ajoutez cette ligne

    public function __construct(EntityManagerInterface $entityManager) // Ajoutez cette ligne
    {
        $this->entityManager = $entityManager; // Ajoutez cette ligne
    }

    /**
     * @Route("/admin/{email}", name="get_admin_by_email", methods={"GET"})
     */
    public function getAdminByEmail(string $email): JsonResponse
    {
        $adminRepository = $this->entityManager->getRepository(Admin::class); // Modifiez cette ligne
        $admin = $adminRepository->findOneBy(['email' => $email]);

        if (!$admin) {
            return new JsonResponse(['error' => 'Admin not found'], 404);
        }

        $responseData = [
            'id' => $admin->getId(),
            'nom' => $admin->getNom(),
            'prenom' => $admin->getPrenom(),
            'email' => $admin->getEmail(),
            'password' => $admin->getPassword(),
            'tel' => $admin->getTel(),
            'clients' => $admin->getClients(),
            'annonces' => $admin->getAnnonces(),
        ];

        return new JsonResponse($responseData);
    }
}
