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
    private $datasHome = array(
        'datas' => array(
            array(
                'title' => 'La Sophrologie, Quesako ?',
                'contents' => array(
                    array(
                        'subtitle' => 'La Sophro-Relaxation',
                        'subcontent' => 'La Sophro-Relaxation est une méthode préventive et
                                        thérapeutique qui propose un ensemble de
                                        techniques basées sur la respiration , la visualisation
                                        positive et des méthodes psychocorporelles.
    
                                        Elle aide au développement personnel visant
                                        l’harmonie Corps-Esprit :
    
                                        C’est en considérant l’individu dans sa globalité que
                                        la sophrologie permet un accompagnement
                                        efficace dans les périodes de difficultés ou tout
                                        simplement dans le développement et
                                        l’épanouissement personnel, familial ou professionnel.
    
                                        C’est à travers des applications simples et
                                        ludiques quelle vous accompagnera vers un équilibre
                                        permettant de sortir de l’agitation mentale et de
                                        transformer en force positive votre quotidien.'
                    )
                )
            ),
            array(
                'title' => 'Domaines d\'applications',
                'contents' => array(
                    array(
                        'subtitle' => 'Domaines d\'applications',
                        'subcontent' => ' Gestion du stress, de l’anxiété, des angoisses
                                            et de la dépression.',
                            'Gestion de la douleur, des troubles
                                             psychosomatiques, des phobies.',
                            'Apprentissage d’une part, à gérer calmement
                                            une crise de spasmophilie ou de tétanie.
                                            D’autre part, apprendre les techniques préventives
                                            afin d’éviter ou de limiter les récidives.',
                            'La Sophro-Relaxation peut aider les asthmatiques.
                                            Techniquement, elle propose au sujet d’apprendre
                                            à respirer, à se détendre et à récupérer.',
                            'Gestion des troubles du sommeil.',
                            'Réduction des tensions physiques et
                                            psychologiques.',
                            'Développement de la confiance en soi,
                                            l’estime de soi et de son potentiel.',
                            'Compréhension et gestion de ses émotions,
                                            mieux se connaitre et s’affirmer en améliorant
                                            sa communication avec soi et les autres.',
                            'Développement d’une pensée positive et
                                            constructive.',
                            'Se préparer sereinement aux examens,
                                            aux projets personnels, professionnels, sportifs…',
                            'Développement de la mémoire et de la
                                            concentration.',
                            'Gestion de ses dépendances (alcool, tabagisme, alimentation…)'
                    )
                )
            ),
            array(
                'title' => 'Techniques utilisées',
                'contents' => array(
                    array(
                        'subtitle' => 'Techniques utilisées',
                        'subcontent' => 'Relaxation',
                                        'Respiration et la gestion du souffle',
                                        'Détente musculaire et mentale',
                                        'Visualisation positive',
                                        'Sophro-Relaxation Energétique',
                                        'Concentration et mémorisation'
                    )
                )
            )
        )
    );
    private $datasSpe = array(
        'datas' => array(
            array(
                'title' => 'Sophrologie et Maternité',
                'contents' => array(
                    array(
                        'subtitle' => 'Sophrologie pour les stérilités psychogènes',
                        'subcontent' => 'Il s’agit de lever les blocages d’une stérilité sans aucune
                                            cause organique, anatomique ou physiologique chez les
                                            deux partenaires.'
                    ),
                    array(
                        'subtitle' => 'Sophrologie pour les futures mamans',
                        'subcontent' => 'La sophrologie accompagne la future maman à vivre une
                                            grossesse harmonieuse et à se préparer à un accouchement
                                            serein.
                                            L’accompagnement sophrologique débute dès le 3ème
                                            ou 4ème mois de grossesse et peut se poursuivre après
                                            l’accouchement pour bien vivre la période post-natale :
                                            Gérer le baby blues, la fatigue et les angoisses ou
                                            simplement rester en forme…'
                    ),
                    array(
                        'subtitle' => 'Sophrologie pour les bébés dès la naissance',
                        'subcontent' => 'Il s’agit ici de vous transmettre des mouvements doux et
                                            simples à travers des massages que vous pourrez refaire
                                            chez vous sans aucune difficulté.
                                            C’est à travers le toucher que vous pourrez établir un
                                            contact immédiat, magique et naturel.
                                            Le massage de bébé est une source indispensable pour son
                                            bien-être afin de l’accompagner dans sa croissance
                                            corporelle et mentale.

                                            Il ne s’agit en aucun cas d’un massage technique mais d’un
                                            échange ludique, doux et rassurant qui inclus la voix,
                                            le regard…'
                    )
                )
            ),
            array(
                'title' => 'Enfance / Adolescence',
                'contents' => array(
                    array(
                        'subtitle' => 'Sophrologie pour les enfants',
                        'subcontent' => 'C’est à travers le jeu, la voix, le conte, le mouvement
                                            que l’enfant accomplira des exercices de respiration, de
                                            relaxation, d’écoute du corps, d’éveil aux sens,
                                            d’imagination, de concentration et de mémorisation.
                                            C’est en effet par le jeu, que l’on pourra attirer la
                                            curiosité de l’enfant et ainsi lui donner envie de
                                            reproduire ces outils de façon autonome et
                                            naturelle quand cela lui semblera nécessaire :
                                            La confiance et l’estime de soi
                                            L’ouverture aux autres et l’affirmation de soi
                                            La conscience de soi et des autres
                                            Découvrir et apprendre à gérer ses émotions…'
                    ),
                    array(
                        'subtitle' => 'Sophrologie pour les adolescents',
                        'subcontent' => 'Particulièrement indiqué chez les adolescents.
                                            Il s’agira des même objectifs tout en prenant en compte
                                            la puberté qui entraîne les modifications physiques et
                                            psychologiques parfois difficiles à vivre intérieurement:
                                            Travailler l’image de soi, se réconcilier avec son
                                            corps et accepter les transformations
                                            Se voir dans le futur, se projeter vers l’adulte qu’il
                                            Veut devenir...
                                            Gérer son énergie à travers le souffle (se calmer ou
                                            se tonifier)
                                            Se préparer aux examens sereinement et mettre en
                                            place le potentiel nécessaire.'
                    )
                )
            ),
            array(
                'title' => 'Sophrologie en Famille',
                'contents' => array(
                    array(
                        'subtitle' => 'Sophrologie en Famille',
                        'subcontent' => 'C’est à travers la Sophro-Relaxation en Famille que vous pourrez influer sur votre niveau de stress et ainsi lutter contre ses effets au quotidien.
                                        C’est en la pratiquant régulièrement qu’elle vous
                                        permettra d’améliorer vos rapports familiaux, d’enrichir votre communication pour que chacun trouve sa place.
                                        Il s’agira avant tout de créer un espace de détente qui
                                        passera par l’échange, la complicité et la compréhension …


                                        En fonction des besoins de chacun, la sophrologie et la relaxation permettent de traiter un ou plusieurs
                                        problèmes clairement identifiés dans le cadre d’un travail thérapeutique personnalisé prenant en compte la globalité de la personne (le caractère, le vécu, les troubles physiologiques et psychologiques…)
                                        permettant l’équilibre des corps physique, mental et émotionnel.
                                        Et ainsi, développer une confiance en soi, un mieux être général et enfin une capacité d’espoir et de
                                        positivisation.'
                    )
                )
            )
        )
    );
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
    private $datasApp = array(
        'datas' => array(
            'content' => array (
                ' Gestion du stress, de l’anxiété, des angoisses
                    et de la dépression.',
                'Gestion de la douleur, des troubles
                     psychosomatiques, des phobies.',
                'Apprentissage d’une part, à gérer calmement
                    une crise de spasmophilie ou de tétanie.
                    D’autre part, apprendre les techniques préventives
                    afin d’éviter ou de limiter les récidives.',
                'La Sophro-Relaxation peut aider les asthmatiques.
                    Techniquement, elle propose au sujet d’apprendre
                    à respirer, à se détendre et à récupérer.',
                'Gestion des troubles du sommeil.',
                'Réduction des tensions physiques et
                    psychologiques.',
                'Développement de la confiance en soi,
                    l’estime de soi et de son potentiel.',
                'Compréhension et gestion de ses émotions,
                    mieux se connaitre et s’affirmer en améliorant
                    sa communication avec soi et les autres.',
                'Développement d’une pensée positive et
                    constructive.',
                'Se préparer sereinement aux examens,
                    aux projets personnels, professionnels, sportifs…',
                'Développement de la mémoire et de la
                    concentration.',
                'Gestion de ses dépendances (alcool, tabagisme, alimentation…)'
            )
        )
    );
    private $datasTech = array(
        'datas' => array(
            'content' => array (
                'Relaxation',
                'Respiration et la gestion du souffle',
                'Détente musculaire et mentale',
                'Visualisation positive',
                'Sophro-Relaxation Energétique',
                'Concentration et mémorisation'
            )
        )
    );

    /**
     * @Route("/", name="index")
     */
    public function home() {


        return $this->render('maincontent.html.twig', $this->datasHome);

    }

    /**
     * @Route("/specialites", name="specialites")
     */
    public function specialites() {


        return $this->render('maincontent.html.twig', $this->datasSpe);

    }

    /**
     * @Route("/groupes", name="groupes")
     */
    public function groupes() {


        return $this->render('maincontent.html.twig', $this->datasGpe);

    }

    /**
     * @Route("/applications", name="applications")
     */
    public function applications() {


        return $this->render('maincontent.html.twig', $this->datasApp);

    }

    /**
     * @Route("/techniques", name="techniques")
     */
    public function techniques() {


        return $this->render('maincontent.html.twig', $this->datasTech);

    }

}
