<?php

namespace WebPrj\WebSecurityBundle\Controller;

use WebPrj\WebSecurityBundle\Entity\UserProfiles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Userprofile controller.
 *
 * @Route("ums_sec/privileges")
 */
class UserProfilesController extends Controller
{
    /**
     * Lists all userProfile entities.
     *
     * @Route("/", name="ums_sec_privileges_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userProfiles = $em->getRepository('WebPrjWebSecurityBundle:UserProfiles')->findAll();

        return $this->render('userprofiles/index.html.twig', array(
            'userProfiles' => $userProfiles,
        ));
    }

    /**
     * Creates a new userProfile entity.
     *
     * @Route("/new", name="ums_sec_privileges_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $userProfile = new Userprofile();
        $form = $this->createForm('WebPrj\WebSecurityBundle\Form\UserProfilesType', $userProfile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userProfile);
            $em->flush($userProfile);

            return $this->redirectToRoute('ums_sec_privileges_show', array('id' => $userProfile->getId()));
        }

        return $this->render('userprofiles/new.html.twig', array(
            'userProfile' => $userProfile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userProfile entity.
     *
     * @Route("/{id}", name="ums_sec_privileges_show")
     * @Method("GET")
     */
    public function showAction(UserProfiles $userProfile)
    {
        $deleteForm = $this->createDeleteForm($userProfile);

        return $this->render('userprofiles/show.html.twig', array(
            'userProfile' => $userProfile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userProfile entity.
     *
     * @Route("/{id}/edit", name="ums_sec_privileges_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UserProfiles $userProfile)
    {
        $deleteForm = $this->createDeleteForm($userProfile);
        $editForm = $this->createForm('WebPrj\WebSecurityBundle\Form\UserProfilesType', $userProfile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ums_sec_privileges_edit', array('id' => $userProfile->getId()));
        }

        return $this->render('userprofiles/edit.html.twig', array(
            'userProfile' => $userProfile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userProfile entity.
     *
     * @Route("/{id}", name="ums_sec_privileges_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UserProfiles $userProfile)
    {
        $form = $this->createDeleteForm($userProfile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userProfile);
            $em->flush();
        }

        return $this->redirectToRoute('ums_sec_privileges_index');
    }

    /**
     * Creates a form to delete a userProfile entity.
     *
     * @param UserProfiles $userProfile The userProfile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserProfiles $userProfile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ums_sec_privileges_delete', array('id' => $userProfile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
