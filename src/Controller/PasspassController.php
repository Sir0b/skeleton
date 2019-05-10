<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Password;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/passpass", name="passpass")
 */
class PasspassController extends AbstractController
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route("/", methods={"GET"})
     */
    public function all()
    {
        $repo = $this->getDoctrine()->getRepository(Password::class);

        $json = $this->serializer->serialize($repo->findAll(), 'json');

        return JsonResponse::fromJsonString($json);
    }

    /**
     * @Route("/", methods={"POST"})
     */
    public function create(Request $req)
    {
        $body = $req->getContent();

        $password = $this->serializer->deserialize($body, Password::class, 'json');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($password);
        $entityManager->flush();

        return new JsonResponse(['id' => $password->getId()]);
    }

    /**
     * @Route("/{id}", methods={"GET"})
     */
    public function single(Password $password)
    {
        $json = $this->serialiazer->serialize($password, 'json');

        return JsonResponse::fromJsonString($json);
    }
}
