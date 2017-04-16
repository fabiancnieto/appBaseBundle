<?php

namespace WebPrj\WebSecurityBundle\Controller;

use WebPrj\WebSecurityBundle\Entity\ProfilePageActions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Profilepageaction controller.
 *
 * @Route("ums_sec/privileges")
 */
class ProfilePageActionsController extends Controller
{
    /**
     * Lists all profilePageAction entities.
     *
     * @Route("/", name="ums_sec_privileges_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $profilePageActions = $em->getRepository('WebPrjWebSecurityBundle:ProfilePageActions')->findAll();

        return $this->render('profilepageactions/index.html.twig', array(
            'profilePageActions' => $profilePageActions,
        ));
    }

    /**
     * Creates a new profilePageAction entity.
     *
     * @Route("/new", name="ums_sec_privileges_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $profilePageAction = new Profilepageaction();
        $form = $this->createForm('WebPrj\WebSecurityBundle\Form\ProfilePageActionsType', $profilePageAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profilePageAction);
            $em->flush($profilePageAction);

            return $this->redirectToRoute('ums_sec_privileges_show', array('id' => $profilePageAction->getId()));
        }

        return $this->render('profilepageactions/new.html.twig', array(
            'profilePageAction' => $profilePageAction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a profilePageAction entity.
     *
     * @Route("/{id}", name="ums_sec_privileges_show")
     * @Method("GET")
     */
    public function showAction(ProfilePageActions $profilePageAction)
    {
        $deleteForm = $this->createDeleteForm($profilePageAction);

        return $this->render('profilepageactions/show.html.twig', array(
            'profilePageAction' => $profilePageAction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing profilePageAction entity.
     *
     * @Route("/{id}/edit", name="ums_sec_privileges_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ProfilePageActions $profilePageAction)
    {
        $deleteForm = $this->createDeleteForm($profilePageAction);
        $editForm = $this->createForm('WebPrj\WebSecurityBundle\Form\ProfilePageActionsType', $profilePageAction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ums_sec_privileges_edit', array('id' => $profilePageAction->getId()));
        }

        return $this->render('profilepageactions/edit.html.twig', array(
            'profilePageAction' => $profilePageAction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a profilePageAction entity.
     *
     * @Route("/{id}", name="ums_sec_privileges_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ProfilePageActions $profilePageAction)
    {
        $form = $this->createDeleteForm($profilePageAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profilePageAction);
            $em->flush();
        }

        return $this->redirectToRoute('ums_sec_privileges_index');
    }

    /**
     * Creates a form to delete a profilePageAction entity.
     *
     * @param ProfilePageActions $profilePageAction The profilePageAction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProfilePageActions $profilePageAction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ums_sec_privileges_delete', array('id' => $profilePageAction->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
