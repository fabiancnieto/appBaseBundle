<?php

namespace WebPrj\WebSecurityBundle\Controller;

use WebPrj\WebSecurityBundle\Entity\LoginRecord;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Loginrecord controller.
 *
 * @Route("ums_sec/track_login")
 */
class LoginRecordController extends Controller
{
    /**
     * Lists all loginRecord entities.
     *
     * @Route("/", name="ums_sec_track_login_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $loginRecords = $em->getRepository('WebPrjWebSecurityBundle:LoginRecord')->findAll();

        return $this->render('loginrecord/index.html.twig', array(
            'loginRecords' => $loginRecords,
        ));
    }

    /**
     * Creates a new loginRecord entity.
     *
     * @Route("/new", name="ums_sec_track_login_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $loginRecord = new Loginrecord();
        $form = $this->createForm('WebPrj\WebSecurityBundle\Form\LoginRecordType', $loginRecord);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($loginRecord);
            $em->flush($loginRecord);

            return $this->redirectToRoute('ums_sec_track_login_show', array('id' => $loginRecord->getId()));
        }

        return $this->render('loginrecord/new.html.twig', array(
            'loginRecord' => $loginRecord,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a loginRecord entity.
     *
     * @Route("/{id}", name="ums_sec_track_login_show")
     * @Method("GET")
     */
    public function showAction(LoginRecord $loginRecord)
    {
        $deleteForm = $this->createDeleteForm($loginRecord);

        return $this->render('loginrecord/show.html.twig', array(
            'loginRecord' => $loginRecord,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing loginRecord entity.
     *
     * @Route("/{id}/edit", name="ums_sec_track_login_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, LoginRecord $loginRecord)
    {
        $deleteForm = $this->createDeleteForm($loginRecord);
        $editForm = $this->createForm('WebPrj\WebSecurityBundle\Form\LoginRecordType', $loginRecord);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ums_sec_track_login_edit', array('id' => $loginRecord->getId()));
        }

        return $this->render('loginrecord/edit.html.twig', array(
            'loginRecord' => $loginRecord,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a loginRecord entity.
     *
     * @Route("/{id}", name="ums_sec_track_login_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, LoginRecord $loginRecord)
    {
        $form = $this->createDeleteForm($loginRecord);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($loginRecord);
            $em->flush();
        }

        return $this->redirectToRoute('ums_sec_track_login_index');
    }

    /**
     * Creates a form to delete a loginRecord entity.
     *
     * @param LoginRecord $loginRecord The loginRecord entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(LoginRecord $loginRecord)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ums_sec_track_login_delete', array('id' => $loginRecord->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
