<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // xenopedia_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'xenopedia_admin_homepage');
                }

                return array (  '_controller' => 'Xenopedia\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'xenopedia_admin_homepage',);
            }

            // xenopedia_admin_user_manager
            if ($pathinfo === '/admin/user_manager') {
                return array (  '_controller' => 'Xenopedia\\AdminBundle\\Controller\\ManagementController::indexUserAction',  '_route' => 'xenopedia_admin_user_manager',);
            }

            // xenopedia_admin_user_manager_edit
            if (0 === strpos($pathinfo, '/admin/edit_user_manager') && preg_match('#^/admin/edit_user_manager/(?P<userName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_admin_user_manager_edit')), array (  '_controller' => 'XenopediaAdminBundle:Mangement:editUser',));
            }

            // xenopedia_admin_minorite_manager
            if ($pathinfo === '/admin/minorite_manager') {
                return array (  '_controller' => 'Xenopedia\\AdminBundle\\Controller\\ManagementController::indexMinoriteAction',  '_route' => 'xenopedia_admin_minorite_manager',);
            }

            // xenopedia_admin_minorite_manager_edit
            if (0 === strpos($pathinfo, '/admin/edit_minorite_manager') && preg_match('#^/admin/edit_minorite_manager/(?P<idMinorite>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_admin_minorite_manager_edit')), array (  '_controller' => 'Xenopedia\\AdminBundle\\Controller\\ManagementController::editMinoriteAction',));
            }

            // xenopedia_admin_categorie_minorite_manager
            if ($pathinfo === '/admin/categorie_minorite_manager') {
                return array (  '_controller' => 'Xenopedia\\AdminBundle\\Controller\\ManagementController::indexCategorieMinoriteAction',  '_route' => 'xenopedia_admin_categorie_minorite_manager',);
            }

            // xenopedia_admin_categorie_minorite_manager_edit
            if (0 === strpos($pathinfo, '/admin/edit_categorie_minorite') && preg_match('#^/admin/edit_categorie_minorite/(?P<idCategorieMinorite>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_admin_categorie_minorite_manager_edit')), array (  '_controller' => 'Xenopedia\\AdminBundle\\Controller\\ManagementController::editCategorieMinoriteAction',));
            }

            // xenopedia_admin_grant_admin
            if (0 === strpos($pathinfo, '/admin/grant_admin') && preg_match('#^/admin/grant_admin/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_admin_grant_admin')), array (  '_controller' => 'Xenopedia\\AdminBundle\\Controller\\ManagementController::grantAdminRightAction',));
            }

        }

        // cliche
        if (rtrim($pathinfo, '/') === '/cliche') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_cliche;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cliche');
            }

            return array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\ClicheController::voterClicheAction',  '_route' => 'cliche',);
        }
        not_cliche:

        if (0 === strpos($pathinfo, '/member')) {
            // add_cliche
            if ($pathinfo === '/member/addCliche') {
                return array (  '_controller' => 'Xenopedia\\UserBundle\\Controller\\SubmissionController::ajouterClicheAction',  '_route' => 'add_cliche',);
            }

            // xenopedia_voter
            if (0 === strpos($pathinfo, '/member/voter') && preg_match('#^/member/voter/(?P<idCliche>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'xenopedia_voter');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_voter')), array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\ClicheController::voterClicheAction',  'url' => 'xenopedia_site_homepage',));
            }

        }

        // xenopedia_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'xenopedia_site_homepage');
            }

            return array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'xenopedia_site_homepage',);
        }

        // xenopedia_quote
        if ($pathinfo === '/quote') {
            return array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\QuoteController::indexAction',  '_route' => 'xenopedia_quote',);
        }

        // xenopedia_voir_topCliche
        if (0 === strpos($pathinfo, '/top') && preg_match('#^/top(?:/(?P<nbCliche>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_voir_topCliche')), array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\DisplayClicheController::topAction',  'nbCliche' => 50,));
        }

        if (0 === strpos($pathinfo, '/voirCliches')) {
            // xenopedia_voir_cliche_membre
            if (preg_match('#^/voirCliches/(?P<userName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_voir_cliche_membre')), array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\DisplayClicheController::indexMembreAction',));
            }

            if (0 === strpos($pathinfo, '/voirCliches/minorite')) {
                // xenopedia_voir_minorite_cliche
                if (preg_match('#^/voirCliches/minorite/(?P<minorite>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xenopedia_voir_minorite_cliche')), array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\DisplayClicheController::indexMinoriteClicheAction',));
                }

                // xenopedia_voir_minorite
                if (rtrim($pathinfo, '/') === '/voirCliches/minorite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'xenopedia_voir_minorite');
                    }

                    return array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\DisplayClicheController::indexMinoriteAction',  '_route' => 'xenopedia_voir_minorite',);
                }

            }

        }

        // xenopedia_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Xenopedia\\SiteBundle\\Controller\\FixedContentController::aboutAction',  '_route' => 'xenopedia_about',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
