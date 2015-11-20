<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Student;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/contacts", name="contacts")
     */
    public function contactsAction()
    {
        return $this->render('default/contacts.html.twig');
    }

    /**
     * @Route("/students", name="students")
     */
    public function studentsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $students = $em->getRepository('AppBundle:Student')->findAll();

        return $this->render('default/students.html.twig', array('students' => $students));
    }

    /**
     * @Route("/students/{city}", name="studentsByCity")
     */
    public function studentsByCityAction($city)
    {
        $em = $this->getDoctrine()->getManager();
        $students = $em->getRepository('AppBundle:Student')->findBy(array('city' => $city));

        return $this->render('default/students.html.twig', array('students' => $students));
    }

    /**
     * @Route("/student/{id}", name="studentById")
     */
    public function studentByIdAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $student = $em->getRepository('AppBundle:Student')->find($id);

        if (empty($student)) {
            return new Response;
        }

        return $this->render('default/student.html.twig', array('student' => $student));
    }

    /**
     * @Route("/student_create", name="createStudent")
     */
    public function createStudentAction(Request $request)
    {
        $newStudent = new Student;
        $newStudent->setFirstName($request->get('firstName'));
        $newStudent->setLastName($request->get('lastName'));
        $newStudent->setEmail($request->get('email'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($newStudent);
        $em->flush();

        return $this->render('default/student.html.twig', array('student' => $newStudent));
    }
}
