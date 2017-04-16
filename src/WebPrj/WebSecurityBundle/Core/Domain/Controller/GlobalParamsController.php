<?php

namespace WebPrj\WebSecurityBundle\Controller;

use WebPrj\WebSecurityBundle\Entity\GlobalParams;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Globalparam controller.
 *
 * @Route("ums_sec/params")
 */
class GlobalParamsController extends Controller
{
    /**
     * Lists all globalParam entities.
     *
     * @Route("/", name="ums_sec_params_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $globalParams = $em->getRepository('WebPrjWebSecurityBundle:GlobalParams')->findAll();

        return $this->render('globalparams/index.html.twig', array(
            'globalParams' => $globalParams,
        ));
    }

    /**
     * Creates a new globalParam entity.
     *
     * @Route("/new", name="ums_sec_params_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $globalParam = new Globalparam();
        $form = $this->createForm('WebPrj\WebSecurityBundle\Form\GlobalParamsType', $globalParam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($globalParam);
            $em->flush($globalParam);

            return $this->redirectToRoute('ums_sec_params_show', array('id' => $globalParam->getId()));
        }

        return $this->render('globalparams/new.html.twig', array(
            'globalParam' => $globalParam,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a globalParam entity.
     *
     * @Route("/{id}", name="ums_sec_params_show")
     * @Method("GET")
     */
    public function showAction(GlobalParams $globalParam)
    {
        $deleteForm = $this->createDeleteForm($globalParam);

        return $this->render('globalparams/show.html.twig', array(
            'globalParam' => $globalParam,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing globalParam entity.
     *
     * @Route("/{id}/edit", name="ums_sec_params_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GlobalParams $globalParam)
    {
        $deleteForm = $this->createDeleteForm($globalParam);
        $editForm = $this->createForm('WebPrj\WebSecurityBundle\Form\GlobalParamsType', $globalParam);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ums_sec_params_edit', array('id' => $globalParam->getId()));
        }

        return $this->render('globalparams/edit.html.twig', array(
            'globalParam' => $globalParam,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a globalParam entity.
     *
     * @Route("/{id}", name="ums_sec_params_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GlobalParams $globalParam)
    {
        $form = $this->createDeleteForm($globalParam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($globalParam);
            $em->flush();
        }

        return $this->redirectToRoute('ums_sec_params_index');
    }

    /**
     * Creates a form to delete a globalParam entity.
     *
     * @param GlobalParams $globalParam The globalParam entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GlobalParams $globalParam)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ums_sec_params_delete', array('id' => $globalParam->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
