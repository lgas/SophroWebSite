<?php
/**
 * Created by PhpStorm.
 * User: Elie
 * Date: 16/12/2017
 * Time: 17:45
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class BaseController extends Controller
{
    private $datasGpe = array(
        'datas' => array(
            array(
                'title'=>'Sophrologie en Entreprise',
                'contents' => array(
                    array(
                        'subtitle' => 'Lorem ipsum dolor sit amet',
                        'subcontent' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque condimentum elit, a ultricies erat interdum elementum. Sed gravida tellus sed elit placerat fringilla. Integer vitae pulvinar lorem. Donec sed ornare turpis. Aliquam at ante lacinia, maximus est at, ullamcorper arcu. Suspendisse commodo lorem egestas, lobortis orci vitae, volutpat mi. Mauris non eleifend velit, id pulvinar ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse at commodo ex. Nam sem enim, tempus in augue in, vestibulum ullamcorper lorem. Ut egestas molestie sapien a convallis. Vestibulum commodo fermentum nunc, et dignissim leo euismod eu. Nulla eu metus imperdiet, volutpat est dapibus, molestie sapien. Nunc pretium elementum felis, sit amet faucibus sapien consequat a. Donec tincidunt vitae est eu scelerisque. '
                    )
                )
            ),
            array(
                'title'=>'Sophrologie à l\'Ecole',
                'contents' => array(
                    array(
                        'subtitle' => 'Lorem ipsum dolor sit amet',
                        'subcontent' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque condimentum elit, a ultricies erat interdum elementum. Sed gravida tellus sed elit placerat fringilla. Integer vitae pulvinar lorem. Donec sed ornare turpis. Aliquam at ante lacinia, maximus est at, ullamcorper arcu. Suspendisse commodo lorem egestas, lobortis orci vitae, volutpat mi. Mauris non eleifend velit, id pulvinar ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse at commodo ex. Nam sem enim, tempus in augue in, vestibulum ullamcorper lorem. Ut egestas molestie sapien a convallis. Vestibulum commodo fermentum nunc, et dignissim leo euismod eu. Nulla eu metus imperdiet, volutpat est dapibus, molestie sapien. Nunc pretium elementum felis, sit amet faucibus sapien consequat a. Donec tincidunt vitae est eu scelerisque. '
                    )
                )
            ),
            array(
                'title'=>'Associations',
                'contents' => array(
                    array(
                        'subtitle' => 'Lorem ipsum dolor sit amet',
                        'subcontent' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque condimentum elit, a ultricies erat interdum elementum. Sed gravida tellus sed elit placerat fringilla. Integer vitae pulvinar lorem. Donec sed ornare turpis. Aliquam at ante lacinia, maximus est at, ullamcorper arcu. Suspendisse commodo lorem egestas, lobortis orci vitae, volutpat mi. Mauris non eleifend velit, id pulvinar ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse at commodo ex. Nam sem enim, tempus in augue in, vestibulum ullamcorper lorem. Ut egestas molestie sapien a convallis. Vestibulum commodo fermentum nunc, et dignissim leo euismod eu. Nulla eu metus imperdiet, volutpat est dapibus, molestie sapien. Nunc pretium elementum felis, sit amet faucibus sapien consequat a. Donec tincidunt vitae est eu scelerisque. '
                    )
                )
            )
        )
    );

    /**
     * @Route("/", name="index")
     */
    public function home() {


        return $this->render('accueil.html.twig');

    }

    /**
     * @Route("/specialites", name="specialites")
     */
    public function specialites() {
        return $this->render('specialites.html.twig');
    }

    /**
     * @Route("/groupes", name="groupes")
     */
    public function groupes() {


        return $this->render('maincontent.html.twig', $this->datasGpe);

    }

}
