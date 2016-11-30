<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

use AppBundle\Entity\Record;

use DateTime;

class DefaultController extends Controller
{
    /**
     * @Rest\View
     */
    public function postDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = json_decode($request->getContent());

        foreach ($data as $record) {
            $entry = new Record();
            $entry->setJson(json_encode($record->strokes))
                  ->setDescription($record->description)
                  ->setClientName($record->client)
                  ->setDate(new DateTime());

            $em->persist($entry);
        }

        $em->flush();

        return new Response();
        //return $entry;
    }
}
