<?php

namespace WebPrj\WebSecurityBundle\Controller;

use WebPrj\WebSecurityBundle\Entity\PageActions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pageaction controller.
 *
 * @Route("ums_sec/menu_actions")
 */
class PageActionsController extends Controller
{
    /**
     * Lists all pageAction entities.
     *
     * @Route("/", name="ums_sec_menu_actions_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pageActions = $em->getRepository('WebPrjWebSecurityBundle:PageActions')->findAll();

        return $this->render('pageactions/index.html.twig', array(
            'pageActions' => $pageActions,
        ));
    }

    /**
     * Creates a new pageAction entity.
     *
     * @Route("/new", name="ums_sec_menu_actions_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pageAction = new Pageaction();
        $form = $this->createForm('WebPrj\WebSecurityBundle\Form\PageActionsType', $pageAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pageAction);
            $em->flush($pageAction);

            return $this->redirectToRoute('ums_sec_menu_actions_show', array('id' => $pageAction->getId()));
        }

        return $this->render('pageactions/new.html.twig', array(
            'pageAction' => $pageAction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pageAction entity.
     *
     * @Route("/{id}", name="ums_sec_menu_actions_show")
     * @Method("GET")
     */
    public function showAction(PageActions $pageAction)
    {
        $deleteForm = $this->createDeleteForm($pageAction);

        return $this->render('pageactions/show.html.twig', array(
            'pageAction' => $pageAction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pageAction entity.
     *
     * @Route("/{id}/edit", name="ums_sec_menu_actions_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PageActions $pageAction)
    {
        $deleteForm = $this->createDeleteForm($pageAction);
        $editForm = $this->createForm('WebPrj\WebSecurityBundle\Form\PageActionsType', $pageAction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ums_sec_menu_actions_edit', array('id' => $pageAction->getId()));
        }

        return $this->render('pageactions/edit.html.twig', array(
            'pageAction' => $pageAction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pageAction entity.
     *
     * @Route("/{id}", name="ums_sec_menu_actions_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PageActions $pageAction)
    {
        $form = $this->createDeleteForm($pageAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pageAction);
            $em->flush();
        }

        return $this->redirectToRoute('ums_sec_menu_actions_index');
    }

    /**
     * Creates a form to delete a pageAction entity.
     *
     * @param PageActions $pageAction The pageAction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PageActions $pageAction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ums_sec_menu_actions_delete', array('id' => $pageAction->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
