<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_assetic_35a8e64' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '35a8e64',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/35a8e64.js',    ),  ),  4 =>   array (  ),),
        '_assetic_35a8e64_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '35a8e64',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/35a8e64_comments_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_48ed673' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '48ed673',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/48ed673.css',    ),  ),  4 =>   array (  ),),
        '_assetic_48ed673_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '48ed673',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/48ed673_comments_1.css',    ),  ),  4 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'stel_question_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'fos_comment_new_threads' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/threads/new',    ),  ),  4 =>   array (  ),),
        'fos_comment_edit_thread_commentable' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/commentable/edit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_new_thread_comments' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/comments/new',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_remove_thread_comment' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/remove',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    3 =>     array (      0 => 'text',      1 => '/comments',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    5 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_edit_thread_comment' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/edit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    3 =>     array (      0 => 'text',      1 => '/comments',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    5 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_new_thread_comment_votes' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/votes/new',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    3 =>     array (      0 => 'text',      1 => '/comments',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    5 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_get_thread' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_get_threads' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_post_threads' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_patch_thread_commentable' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'PATCH',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/commentable',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_get_thread_comment' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'commentId',    ),    2 =>     array (      0 => 'text',      1 => '/comments',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    4 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_patch_thread_comment_state' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'PATCH',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/state',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    3 =>     array (      0 => 'text',      1 => '/comments',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    5 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_put_thread_comments' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'PUT',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'commentId',    ),    2 =>     array (      0 => 'text',      1 => '/comments',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    4 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_get_thread_comments' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/comments',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_post_thread_comments' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/comments',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_get_thread_comment_votes' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/votes',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    3 =>     array (      0 => 'text',      1 => '/comments',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    5 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'fos_comment_post_thread_comment_votes' => array (  0 =>   array (    0 => 'id',    1 => 'commentId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',    '_format' => 'html',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/votes',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    3 =>     array (      0 => 'text',      1 => '/comments',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    5 =>     array (      0 => 'text',      1 => '/api/threads',    ),  ),  4 =>   array (  ),),
        'question' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question/',    ),  ),  4 =>   array (  ),),
        'question_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),),
        'question_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question/new',    ),  ),  4 =>   array (  ),),
        'question_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question/create',    ),  ),  4 =>   array (  ),),
        'question_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),),
        'question_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),),
        'question_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),),
        'question_vote_for' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::vote_forAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/votefor',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),),
        'question_vote_against' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::vote_againstAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voteagainst',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),),
        'question_reason_against' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\QuestionController::reason_againstAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reasonagainst',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),),
        'question_getall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Stel\\Bundle\\QuestionBundle\\Controller\\DefaultController::getAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/e',    ),  ),  4 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}