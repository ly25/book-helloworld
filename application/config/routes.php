<?php if (! defined('BASEPATH')) exit('Direct Access To This Script Is Not Allowed!');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|   http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|   $route['default_controller']             = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the 'welcome' class
| would be loaded.
|
|   $route['404_override']               = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['404_override']                                                                               = 'application/home_controller/error404';
$route['default_controller']                                                                         = 'reroute';


/*
 | -------------------------------------------------------------------------
 | APPLICATION ROUTES
 | -------------------------------------------------------------------------
 |
 | These routes are for the application controllers.
 |
 */
$route['main']                                                                                       = 'application/home_controller/index';
$route['application_verification']                                                                   = 'application/home_controller/verification';
$route['application_verification_post']                                                              = 'application/home_controller/verification_post';
$route['application_activation']                                                                     = 'application/home_controller/activation';
$route['application_activation_post']                                                                = 'application/home_controller/activation_post';
$route['application_signin']                                                                         = 'application/home_controller/signin';
$route['application_signin_post']                                                                    = 'application/home_controller/signin_post';
$route['application_password_request']                                                               = 'application/home_controller/request';
$route['application_password_request_post']                                                          = 'application/home_controller/request_post';
$route['application_password_reset']                                                                 = 'application/home_controller/reset';
$route['application_password_reset_post']                                                            = 'application/home_controller/reset_post';
$route['application_signout']                                                                        = 'application/home_controller/signout';
$route['application_dashboard']                                                                      = 'application/application_controller/index';
$route['program_selection_post_ajax']                                                                = 'application/application_controller/program_post_ajax'; // Added to avoid page refresh on form submit
$route['set_completed_progress_ajax']                                                                = 'application/application_controller/set_completed_progress_ajax'; // Added to avoid page refresh on form submit
$route['education_background_post_ajax']                                                             = 'application/application_controller/education_post_ajax'; // Added to avoid page refresh on form submit
$route['academic_courses_post_ajax']                                                                 = 'application/application_controller/courses_post_ajax'; // Added to avoid page refresh on form submit
$route['scholarships_post_ajax']                                                                     = 'application/application_controller/scholarships_post_ajax'; // Added to avoid page refresh on form submit
$route['criminal_history_post_ajax']                                                                 = 'application/application_controller/essay_post_ajax'; // Added to avoid page refresh on form submit
$route['judicial_history_post_ajax']                                                                 = 'application/application_controller/essay_post_ajax'; // Added to avoid page refresh on form submit
$route['previous_acceptance_post_ajax']                                                              = 'application/application_controller/essay_post_ajax'; // Added to avoid page refresh on form submit
$route['who_i_am_post_ajax']                                                                         = 'application/application_controller/who_i_am_post_ajax'; // Added to avoid page refresh on form submit
$route['application_interview_essay/(:any)']                                                         = 'application/essay_controller/application_interview_essay/$1';
$route['application_essay_MDCV']                                                                     = 'application/essay_controller/index/MDCV';
$route['application_essay_MDED']                                                                     = 'application/essay_controller/index/MDED';
$route['application_essay_MDAD']                                                                     = 'application/essay_controller/index/MDAD';
$route['application_essay_MDHE']                                                                     = 'application/essay_controller/index/MDHE';
$route['application_essay_MDDC']                                                                     = 'application/essay_controller/index/MDDC';
$route['application_essay_MDGB']                                                                     = 'application/essay_controller/index/MDGB';
$route['application_essay_MDCH']                                                                     = 'application/essay_controller/index/MDCH';
$route['application_essay_MDTF']                                                                     = 'application/essay_controller/index/MDTF';
$route['application_essay_INTPHOTO']                                                                 = 'application/essay_controller/index/INTPHOTO';
$route['application_essay_PCLTH']                                                                    = 'application/essay_controller/index/PCLTH';
$route['application_essay_PCLTP']                                                                    = 'application/essay_controller/index/PCLTP';
$route['application_essay_post']                                                                     = 'application/essay_controller/index_post';
$route['application_interview_essay_post']                                                           = 'application/essay_controller/interview_index_post'; // Added for interview essays
$route['application_essay_selection']                                                                = 'application/essay_controller/selection';
$route['application_essay_selection_post']                                                           = 'application/essay_controller/selection_post';
$route['social_sciences']                                                                            = 'application/background_controller/sciences';
$route['social_sciences_post_ajax']                                                                  = 'application/application_controller/sciences_post_ajax'; // Added to avoid page refresh on form submit
$route['associated_relations']                                                                       = 'application/application_controller/relations';
$route['associated_relations_add']                                                                   = 'application/application_controller/relations_add';
$route['associated_relations_add_post_ajax']                                                         = 'application/application_controller/relations_add_post_ajax'; // Added to avoid page refresh on form submit
$route['associated_relations_edit/(:any)']                                                           = 'application/application_controller/relations_edit/$1';
$route['associated_relations_edit_post_ajax']                                                        = 'application/application_controller/relations_edit_post_ajax'; // Added to avoid page refresh on form submit
$route['associated_relations_remove/(:any)']                                                         = 'application/application_controller/relations_remove/$1';
$route['associated_relations_remove_post_ajax']                                                      = 'application/application_controller/relations_remove_post_ajax';// Added to avoid page refresh on form submit
$route['associated_relations_view/(:any)']                                                           = 'application/application_controller/relations_view/$1';
$route['additional_considerations_post_ajax']                                                        = 'application/application_controller/essay_post_ajax'; // Added to avoid page refresh on form submit
$route['application_file_post_ajax']                                                                 = 'application/application_controller/file_post_ajax'; // Added to avoid page refresh on form submit
$route['application_review']                                                                         = 'application/application_controller/review';
$route['application_review_post']                                                                    = 'application/application_controller/review_post';
$route['application_password_update']                                                                = 'application/application_controller/update';
$route['application_password_update_post']                                                           = 'application/application_controller/update_post';
$route['application_history']                                                                        = 'application/application_controller/history';
$route['application_complete']                                                                       = 'application/application_controller/complete';
$route['application_payment']                                                                        = 'application/application_controller/payment';
$route['application_payment_post']                                                                   = 'application/application_controller/payment_post';
$route['application_waiver']                                                                         = 'application/application_controller/waiver';
$route['application_waiver_post']                                                                    = 'application/application_controller/waiver_post';
$route['file_remove_ajax/(:any)']                                                                    = 'application/application_controller/file_remove_ajax/$1'; // Added to avoid page refresh on form submit
$route['applicant/file_download/(:any)']                                                             = 'application/application_controller/file_download/$1'; // Added to allow applicants to download the uploaded files in supplemental application form
$route['interview_schedule']                                                                         = 'application/interview_controller/schedule';
$route['interview_schedule_post']                                                                    = 'application/interview_controller/schedule_post';
$route['interview_checkin']                                                                          = 'application/interview_controller/checkin';
$route['interview_checkin_post']                                                                     = 'application/interview_controller/checkin_post';
$route['interview_photo']                                                                            = 'application/interview_controller/photo';
$route['interview_photo_post']                                                                       = 'application/interview_controller/photo_post';
$route['interview_photo_confirm']                                                                    = 'application/interview_controller/confirm';
$route['interview_photo_confirm_post']                                                               = 'application/interview_controller/confirm_post';
$route['interview_checkedin']                                                                        = 'application/interview_controller/checkedin';
$route['interview_survey']                                                                           = 'application/interview_controller/survey';
$route['interview_survey_post']                                                                      = 'application/interview_controller/survey_post';

/*
| -------------------------------------------------------------------------
| MANAGER ROUTES
| -------------------------------------------------------------------------
|
| These routes are for the manager controllers.
|
*/
$route['manager']                                                                                    = 'manager/home_controller/index';
$route['manager/home']                                                                               = 'manager/home_controller/index';
$route['manager/home_statistics']                                                                    = 'manager/home_controller/index_with_statistics';
$route['manager/agreements']                                                                         = 'manager/home_controller/agreements';
$route['manager/agreements_post']                                                                    = 'manager/home_controller/agreements_post';
$route['manager/signin']                                                                             = 'manager/home_controller/signin';
$route['manager/disabled']                                                                           = 'manager/home_controller/disabled';
$route['manager/loginshibd']                                                                         = 'manager/loginshibd_controller';
$route['manager/signin_post']                                                                        = 'manager/home_controller/signin_post';
$route['manager/signout']                                                                            = 'manager/home_controller/signout';
$route['manager/timeout']                                                                            = 'manager/home_controller/timeout';
$route['manager/zscore']                                                                             = 'manager/home_controller/zscore';
$route['manager/announcements']                                                                      = 'manager/home_controller/announcements';
$route['manager/applicant_demographics/(:any)/(:any)']                                               = 'manager/home_controller/applicant_demographics/$1/$2';
$route['manager/applicant_demographics']                                                             = 'manager/home_controller/applicant_demographics/A/ALL';
$route['manager/applicant_demographics_detailed_view/(:any)/(:any)/(:any)']                          = 'manager/home_controller/applicant_demographics_detailed_view/$1/$2/$3';
$route['manager/applicant_infographic']                                                              = 'manager/home_controller/applicant_infographic';
$route['manager/application_statuses']                                                               = 'manager/home_controller/application_statuses';
$route['manager/application_status_summary']                                                         = 'manager/home_controller/application_status_summary';
$route['manager/application_status_paths']                                                           = 'manager/home_controller/status_paths';
$route['manager/applicant_paths']                                                                    = 'manager/home_controller/applicant_paths';
$route['manager/application_path_builder']                                                           = 'manager/home_controller/path_builder';
$route['manager/user_resources']                                                                     = 'manager/home_controller/user_resources';
$route['manager/change_cycles/(:any)']                                                               = 'manager/home_controller/change_cycles_post/$1';
$route['manager/mirror_applicant/(:any)']                                                            = 'manager/home_controller/mirror_applicant/$1';
$route['manager/signup']                                                                             = 'manager/home_controller/signup';
$route['manager/post_signup']                                                                        = 'manager/home_controller/admin_signup_post';
$route['manager/enable/(:any)']                                                                      = 'manager/home_controller/enable/$1';
$route['manager/enable_redirect']                                                                    = 'manager/home_controller/enable_redirect';

/*
 * Begin Screens
 */
$route['manager/screens']                                                                            = 'manager/screens_controller/index';
$route['manager/screens/queue']                                                                      = 'manager/screens_controller/queue';
$route['manager/screens/academic_review_queue']                                                      = 'manager/screens_controller/academic_review_queue';
$route['manager/screens/urm_queue']                                                                  = 'manager/screens_controller/urm_queue';
$route['manager/screens/history']                                                                    = 'manager/screens_controller/history';
$route['manager/screens/settings']                                                                   = 'manager/screens_controller/settings';
$route['manager/screens/setting_post']                                                               = 'manager/screens_controller/setting_post';
$route['manager/screens/setting_fetch_ajax']                                                         = 'manager/screens_controller/setting_fetch_ajax';
$route['manager/screens/history/all']                                                                = 'manager/screens_controller/history_all';
$route['manager/screens/finals']                                                                     = 'manager/screens_controller/finals';
$route['manager/screens/final_post']                                                                 = 'manager/screens_controller/final_post';
$route['manager/screens/final_post_total_ajax']                                                      = 'manager/screens_controller/final_post_total_ajax';

$route['manager/applicant/score/(:any)/(:any)/(:any)/(:any)']                                        = 'manager/screens_controller/score/$1/$2/$3/$4';
$route['manager/screens/score_post']                                                                 = 'manager/screens_controller/score_post';
$route['manager/screens/pass/(:any)']                                                                = 'manager/screens_controller/pass/$1';
$route['manager/screens/fail/(:any)']                                                                = 'manager/screens_controller/fail/$1';
$route['manager/screens/reset_md_screening_queue']                                                   = 'manager/screens_controller/reset_md_screening_queue';
$route['manager/screens/reset_md_screening_queue_submit']                                            = 'manager/screens_controller/reset_md_screening_queue_submit';
$route['manager/screens/md_queue']                                                                   = 'manager/screens_controller/queue_original';
/*
 * End Screens
 */


$route['manager/(.+)/get_applicant_search_autocomplete_data']                                      = 'manager/home_controller/get_applicant_search_autocomplete_data';
$route['manager/(.+)/get_user_search_autocomplete_data']                                           = 'manager/home_controller/get_user_search_autocomplete_data';

$route['manager/styleguide']                                                                         = 'manager/styleguide_controller/index';
$route['manager/styleguide/scrolltable']                                                             = 'manager/styleguide_controller/scrolltable';
$route['manager/styleguide/pagingtable']                                                             = 'manager/styleguide_controller/pagingtable';
$route['manager/styleguide/applicantsummary']                                                        = 'manager/styleguide_controller/applicantsummary';
$route['manager/styleguide/applicantdetail']                                                         = 'manager/styleguide_controller/applicantdetail';
$route['manager/styleguide/buttons']                                                                 = 'manager/styleguide_controller/buttons';
$route['manager/styleguide/forms']                                                                   = 'manager/styleguide_controller/forms';
$route['manager/styleguide/datetime']                                                                = 'manager/styleguide_controller/datetime';
$route['manager/styleguide/bodycontent0']                                                            = 'manager/styleguide_controller/bodycontent0';
$route['manager/styleguide/bodycontent1']                                                            = 'manager/styleguide_controller/bodycontent1';
$route['manager/styleguide/colorblind']                                                              = 'manager/styleguide_controller/colorblind';
$route['manager/styleguide/navigation']                                                              = 'manager/styleguide_controller/navigation';
$route['manager/styleguide/nameformat']                                                              = 'manager/styleguide_controller/nameformat';
$route['manager/styleguide/datepicker']                                                              = 'manager/styleguide_controller/datepicker';
$route['manager/styleguide/margins']                                                                 = 'manager/styleguide_controller/margins';
$route['manager/styleguide/flashmessage']                                                            = 'manager/styleguide_controller/flashmessage';
$route['manager/styleguide/flashmessagewrong']                                                       = 'manager/styleguide_controller/flashmessagewrong';
$route['manager/photobooth']                                                                         = 'manager/photobooth_controller/index';
$route['manager/photobooth/upload']                                                                  = 'manager/photobooth_controller/upload';

//
/*
| -------------------------------------------------------------------------
| MSTP ROUTES
| -------------------------------------------------------------------------
|
| These routes are for the MSTP .
|
*/
/*
 * new
 */
$route['manager/screens/mstp_due_dates']                                                             = 'manager/screens_controller/mstp_due_dates';
$route['manager/screens/mstp_due_date_post']                                                         = 'manager/screens_controller/mstp_due_date_post';
$route['manager/screens/mstp_due_date_update']                                                       = 'manager/screens_controller/mstp_due_date_update';
$route['manager/screens/mstp_due_date_delete/(:any)']                                                = 'manager/screens_controller/mstp_due_date_delete/$1';
$route['manager/screens/mstp_due_date_edit/(:any)']                                                  = 'manager/screens_controller/mstp_due_date_edit/$1';
$route['manager/screens/mstp_assignments/(:any)']                                                    = 'manager/screens_controller/mstp_assignments/$1';
$route['manager/screens/mstp_assignments_post']                                                      = 'manager/screens_controller/mstp_assignments_post';
$route['manager/screens/mstp_screens']                                                               = 'manager/screens_controller/mstp_screens';
$route['manager/screens/mstp_queue']                                                                 = 'manager/screens_controller/mstp_queue';
$route['manager/screens/mstp_all_queues']                                                            = 'manager/screens_controller/mstp_all_queues';
$route['manager/screens/mstp_all_history']                                                           = 'manager/screens_controller/mstp_all_history';
$route['manager/screens/mstp_screen_score/(:any)/(:any)']                                            = 'manager/screens_controller/mstp_screen_score/$1/$2';
$route['manager/screens/delete_mstp_screen/(:any)/(:any)']                                           = 'manager/screens_controller/delete_mstp_screen/$1/$2';
$route['manager/screens/mstp_score_post']                                                            = 'manager/screens_controller/mstp_score_post';
$route['manager/screens/mstp_reader_queue/(:any)/(:any)']                                            = 'manager/screens_controller/mstp_reader_queue/$1/$2';
$route['manager/screens/mstp_due_dates']                                                             = 'manager/screens_controller/mstp_due_dates';
$route['manager/screens/mstp_due_date_post']                                                         = 'manager/screens_controller/mstp_due_date_post';
$route['manager/screens/mstp_due_date_update']                                                       = 'manager/screens_controller/mstp_due_date_update';
$route['manager/screens/mstp_due_date_delete/(:any)']                                                = 'manager/screens_controller/mstp_due_date_delete/$1';
$route['manager/screens/mstp_due_date_edit/(:any)']                                                  = 'manager/screens_controller/mstp_due_date_edit/$1';
$route['manager/screens/mstp_assignments/(:any)']                                                    = 'manager/screens_controller/mstp_assignments/$1';
$route['manager/screens/mstp_assignments_post']                                                      = 'manager/screens_controller/mstp_assignments_post';
$route['manager/screens/mstp_queue']                                                                 = 'manager/screens_controller/mstp_queue';
$route['manager/screens/mstp_all_queues']                                                            = 'manager/screens_controller/mstp_all_queues';
$route['manager/screens/mstp_all_history']                                                           = 'manager/screens_controller/mstp_all_history';
$route['manager/screens/mstp_screen_score/(:any)/(:any)']                                            = 'manager/screens_controller/mstp_screen_score/$1/$2';
$route['manager/screens/delete_mstp_screen/(:any)/(:any)']                                           = 'manager/screens_controller/delete_mstp_screen/$1/$2';
$route['manager/screens/mstp_score_post']                                                            = 'manager/screens_controller/mstp_score_post';
$route['manager/screens/mstp_summary/(:any)']                                                        = 'manager/mstp_controller/mstp_summary/$1';
$route['manager/screens/details/(:any)']                                                             = 'manager/mstp_controller/mstp_screens_details/$1';
$route['manager/screens/mstp_filter_post']                                                           = 'manager/mstp_controller/mstp_filter_post';

/*end of MSTP*/


/*
 * Begin new applicant_controller
 */
$route['manager/applicants']                                                                         = 'manager/applicant_controller/index';
$route['manager/applicant/search']                                                                   = 'manager/applicant_controller/search/';
$route['manager/applicant/search/(:any)']                                                            = 'manager/applicant_controller/search/$1';
$route['manager/applicant/search_post']                                                              = 'manager/applicant_controller/search_post';
$route['manager/applicant/list_applicationstatus/(:any)']                                            = 'manager/applicant_controller/list_applicationstatus/$1';
$route['manager/applicant/list_mstp_fallback']                                                       = 'manager/applicant_controller/list_mstp_fallback';
$route['manager/applicant/list_history_applicationstatus/(:any)']                                    = 'manager/applicant_controller/list_history_applicationstatus/$1';
$route['manager/applicant/conflict/(:any)']                                                          = 'manager/applicant_controller/conflict/$1';
$route['manager/applicant/conflict_post/(:any)']                                                     = 'manager/applicant_controller/conflict_post/$1';
$route['manager/applicant/summary/(:any)']                                                           = 'manager/applicant_controller/summary/$1';
$route['manager/applicant/resend_email/(:any)']                                                      = 'manager/applicant_controller/resend_invitation_email/$1';
$route['manager/applicant/check_lock_for_user']                                                      = 'manager/applicant_controller/check_lock_for_user';
$route['manager/applicant/check_for_lock']                                                           = 'manager/applicant_controller/check_for_lock';
$route['manager/applicant/delete_from_table/(:any)']                                                 = 'manager/applicant_controller/delete_from_table/$1';
$route['manager/applicant/summary_mstp/(:any)']                                                      = 'manager/applicant_controller/summary_mstp/$1';
$route['manager/applicant/summary_pclt/(:any)']                                                      = 'manager/applicant_controller/summary_pclt/$1';
$route['manager/applicant/summary_pdf/(:any)']                                                       = 'manager/applicant_controller/summary_pdf/$1';
$route['manager/applicant/summary_mstp_pdf/(:any)']                                                  = 'manager/applicant_controller/summary_mstp_pdf/$1';
$route['manager/applicant/who_i_am/(:any)']                                                          = 'manager/applicant_controller/who_i_am/$1';
$route['manager/applicant/background/(:any)']                                                        = 'manager/applicant_controller/background/$1';
$route['manager/applicant/essays/(:any)']                                                            = 'manager/applicant_controller/essays/$1';
$route['manager/applicant/social_science/(:any)']                                                    = 'manager/applicant_controller/social_science/$1';
$route['manager/applicant/recommendations/(:any)']                                                   = 'manager/applicant_controller/recommendations/$1';
$route['manager/applicant/post_payment_status']                                          			 = 'manager/applicant_controller/post_payment_status';

$route['manager/applicant/post_recommendation_indicator']                                           = 'manager/applicant_controller/post_recommendation_indicator';
$route['manager/applicant/additional_considerations/(:any)']                                         = 'manager/applicant_controller/additional_considerations/$1';
$route['manager/applicant/applicant_detail_summary/(:any)']                                          = 'manager/applicant_controller/applicant_detail_summary/$1';
$route['manager/applicant/alumni/(:any)']                                                            = 'manager/applicant_controller/alumni/$1';
$route['manager/applicant/disadvantages/(:any)']                                                     = 'manager/applicant_controller/disadvantages/$1';
$route['manager/applicant/experiences/(:any)']                                                       = 'manager/applicant_controller/experiences/$1';
$route['manager/applicant/parents/(:any)']                                                           = 'manager/applicant_controller/parents/$1';
$route['manager/applicant/amcas_essays/(:any)']                                                      = 'manager/applicant_controller/amcas_essays/$1';
$route['manager/applicant/short_transcript/(:any)']                                                  = 'manager/applicant_controller/short_transcript/$1';
$route['manager/applicant/amcas_transcript/(:any)']                                                  = 'manager/applicant_controller/amcas_transcript/$1';
$route['manager/applicant/mmi_details/(:any)']                                                       = 'manager/applicant_controller/mmi_details/$1';
$route['manager/applicant/screen_details/(:any)']                                                    = 'manager/applicant_controller/screen_details/$1';
$route['manager/applicant/target_courses/(:any)']                                                    = 'manager/applicant_controller/target_courses/$1';
$route['manager/applicant/transaction_history/(:any)']                                               = 'manager/applicant_controller/transaction_history/$1';
$route['manager/applicant/status_history/(:any)']                                                    = 'manager/applicant_controller/status_history/$1';
$route['manager/applicant/scholarships/(:any)']                                                      = 'manager/applicant_controller/scholarships/$1';
$route['manager/applicant/scholarships_post']                                                        = 'manager/applicant_controller/scholarships_post';

$route['manager/applicant/status/(:any)']                                                            = 'manager/applicant_controller/status/$1';
$route['manager/applicant/status_post']                                                              = 'manager/applicant_controller/status_post';
$route['manager/applicant/amcas_status_post']                                                        = 'manager/applicant_controller/amcas_status_post';
$route['manager/applicant/program_post/(:any)/(:any)/(:any)/(:any)']                                 = 'manager/applicant_controller/program_post/$1/$2/$3/$4';
$route['manager/applicant/citizenship_post/(:any)/(:any)']                                           = 'manager/applicant_controller/citizenship_post/$1/$2';
$route['manager/applicant/fee_waiver/(:any)']                                                        = 'manager/applicant_controller/fee_waiver/$1';
$route['manager/applicant/fee_waiver_post']                                                          = 'manager/applicant_controller/fee_waiver_post';
$route['manager/applicant/fee_waiver_remove/(:any)']                                                 = 'manager/applicant_controller/fee_waiver_remove/$1';
$route['manager/applicant/notes/(:any)']                                                             = 'manager/applicant_controller/notes/$1';
$route['manager/applicant/note_post']                                                                = 'manager/applicant_controller/note_post';
$route['manager/applicant/note_remove/(:any)']                                                       = 'manager/applicant_controller/note_remove/$1';
$route['manager/applicant/files/(:any)']                                                             = 'manager/applicant_controller/files/$1';
$route['manager/applicant/file_post']                                                                = 'manager/applicant_controller/file_post';
$route['manager/applicant/file_download/(:any)']                                                     = 'manager/applicant_controller/file_download/$1';
$route['manager/applicant/file_remove/(:any)']                                                       = 'manager/applicant_controller/file_remove/$1';
$route['manager/applicant/program/(:any)']                                                           = 'manager/applicant_controller/program/$1';
$route['manager/applicant/nationality/(:any)']                                                       = 'manager/applicant_controller/nationality/$1';
$route['manager/applicant/delete_interview/(:any)']                                                  = 'manager/applicant_controller/delete_interview/$1';
$route['manager/applicant/edit_interview/(:any)']                                                    = 'manager/applicant_controller/edit_interview/$1';
$route['manager/applicant/interview_reschedule_post']                                                = 'manager/applicant_controller/interview_reschedule_post';
$route['committee_survey_post']                                                                      = 'manager/applicant_controller/committee_survey_post';
$route['committee_survey_post_ajax']                                                                 = 'manager/applicant_controller/committee_survey_post_ajax';

$route['manager/applicant/matriculated_zipfiles']                                                    = 'manager/applicant_controller/matriculated_zipfiles';
$route['manager/applicant/download_zip']                                                             = 'manager/applicant_controller/download_zip';


$route['manager/applicant/reset_data_counter']                                                       = 'manager/applicant_controller/reset_data_counter';
$route['manager/applicant/close_tab']                                                                = 'manager/applicant_controller/close_tab';
$route['manager/applicant/set_tab_by_uuid']                                                          = 'manager/applicant_controller/set_tab_by_uuid';
$route['manager/applicant/increment_counter']                                                        = 'manager/applicant_controller/increment_counter';
$route['manager/applicant/javascript_footer']                                                        = 'manager/applicant_controller/javascript_footer';
$route['manager/applicant/set_session_variables']                                                    = 'manager/applicant_controller/set_session_variables';
$route['manager/applicant/reset_session_variables']                                                  = 'manager/applicant_controller/reset_session_variables';
$route['manager/reset']                                                                              = 'manager/applicant_controller/reset_session_variables';
$route['manager/refresh']                                                                            = 'manager/applicant_controller/reset_session_variables';
/*
 * end applicant controller
 */

$route['manager/reports']                                                                            = 'manager/reports_controller/index';
$route['manager/reports/screenReportAJAX']                                                           = 'manager/reports_controller/screenReportAJAX';
$route['manager/csvReport']                                                                          = 'manager/reports_controller/csvReport';
$route['manager/reports/getPrimaryUndergradInstAJAX']                                                = 'manager/reports_controller/getPrimaryUndergradInstAJAX';
$route['manager/reports/excelExport']                                                                = 'manager/reports_controller/excelExport';

$route['manager/reports/create_mstp_excel_spreadsheet']                                                                = 'manager/reports_controller/create_mstp_excel_spreadsheet';

$route['manager/dissect']                                                                            = 'manager/dissect_controller/index';
$route['manager/dissect/getDataAJAX']                                                                = 'manager/dissect_controller/getDataAJAX';
$route['manager/dissect/getApplicationStatusesAJAX']                                                 = 'manager/dissect_controller/getApplicationStatusesAJAX';
$route['manager/dissect/getProgramsAJAX']                                                            = 'manager/dissect_controller/getProgramsAJAX';
$route['manager/dissect/getGendersAJAX']                                                             = 'manager/dissect_controller/getGendersAJAX';

$route['manager/dissect_history']                                                                    = 'manager/dissect_history_controller/index';
$route['manager/dissect_history/getDataAJAX']                                                        = 'manager/dissect_history_controller/getDataAJAX';
$route['manager/dissect_history/getApplicationStatusesAJAX']                                         = 'manager/dissect_history_controller/getApplicationStatusesAJAX';
$route['manager/dissect_history/getProgramsAJAX']                                                    = 'manager/dissect_history_controller/getProgramsAJAX';
$route['manager/dissect_history/getGendersAJAX']                                                     = 'manager/dissect_history_controller/getGendersAJAX';

$route['manager/reports/compare_mcat_scores']                                                        = 'manager/reports_controller/compare_mcat_scores';

//routes for peoplesoft import files
$route['manager/csvPeopleSoftReport']                                                                = 'manager/reports_controller/csvPeopleSoftReport';
/* Routes for a demo of doing AJAX calls. This is instructional. It's not real EASE application functionality. */
$route['manager/ajaxdemo']                                                                           = 'manager/ajaxdemo_controller/index';
$route['manager/ajaxdemo/getDataAJAX']                                                               = 'manager/ajaxdemo_controller/getDataAJAX';


/*
 * admin
 */
$route['manager/admin']                                                                              = 'manager/admin_controller/index';
$route['manager/admin/email_applicants']                                                             = 'manager/admin_controller/email_applicants_form';
$route['manager/admin/post_email_applicants']                                                        = 'manager/admin_controller/email_applicants_post';
$route['manager/admin/email_users']                                                                  = 'manager/admin_controller/email_users_form';
$route['manager/admin/post_email_users']                                                             = 'manager/admin_controller/email_users_post';
$route['manager/admin/list_announcements']                                                           = 'manager/admin_controller/announcements_table';
$route['manager/admin/add_announcement']                                                             = 'manager/admin_controller/announcements_form/0';
$route['manager/admin/edit_announcement/(:any)']                                                     = 'manager/admin_controller/announcements_form/$1';
$route['manager/admin/post_announcement']                                                            = 'manager/admin_controller/announcements_post';
$route['manager/admin/list_system_announcements']                                                    = 'manager/admin_controller/announcements_table';
$route['manager/admin/add_system_announcement']                                                      = 'manager/admin_controller/announcements_form/0';
$route['manager/admin/edit_system_announcement/(:any)']                                              = 'manager/admin_controller/announcements_form/$1';
$route['manager/admin/post_system_announcement']                                                     = 'manager/admin_controller/announcements_post';
$route['manager/admin/list_conflicts']                                                               = 'manager/admin_controller/conflicts_table';
$route['manager/admin/add_conflict']                                                                 = 'manager/admin_controller/conflicts_form/0';
$route['manager/admin/edit_conflict/(:any)']                                                         = 'manager/admin_controller/conflicts_form/$1';
$route['manager/admin/post_conflict']                                                                = 'manager/admin_controller/conflicts_post';
$route['manager/admin/delete_conflict/(:any)']                                                       = 'manager/admin_controller/conflicts_delete/$1';
$route['manager/admin/list_contents']                                                                = 'manager/admin_controller/contents_table';
$route['manager/admin/add_content']                                                                  = 'manager/admin_controller/contents_form/0';
$route['manager/admin/edit_content/(:any)']                                                          = 'manager/admin_controller/contents_form/$1';
$route['manager/admin/post_content']                                                                 = 'manager/admin_controller/contents_post';
$route['manager/admin/list_agreements']                                                              = 'manager/admin_controller/agreements_table';
$route['manager/admin/add_agreements']                                                               = 'manager/admin_controller/agreements_form/0';
$route['manager/admin/edit_agreements/(:any)']                                                       = 'manager/admin_controller/agreements_form/$1';
$route['manager/admin/post_agreements']                                                              = 'manager/admin_controller/agreements_post';
$route['manager/admin/list_calendar']                                                                = 'manager/admin_controller/calendar_table';
$route['manager/admin/add_calendar']                                                                 = 'manager/admin_controller/calendar_form/0';
$route['manager/admin/edit_calendar/(:any)']                                                         = 'manager/admin_controller/calendar_form/$1';
$route['manager/admin/post_calendar']                                                                = 'manager/admin_controller/calendar_post';
$route['manager/admin/list_email_templates']                                                         = 'manager/admin_controller/email_templates_table';
$route['manager/admin/add_email_template']                                                           = 'manager/admin_controller/email_templates_form/0';
$route['manager/admin/edit_email_template/(:any)']                                                   = 'manager/admin_controller/email_templates_form/$1';
$route['manager/admin/post_email_template']                                                          = 'manager/admin_controller/email_templates_post';
$route['manager/admin/list_resources']                                                               = 'manager/admin_controller/resources_table';
$route['manager/admin/add_resource']                                                                 = 'manager/admin_controller/resources_form/0';
$route['manager/admin/edit_resource/(:any)']                                                         = 'manager/admin_controller/resources_form/$1';
$route['manager/admin/post_resource']                                                                = 'manager/admin_controller/resources_post';
$route['manager/admin/disable_resource/(:any)']                                                      = 'manager/admin_controller/resources_disable/$1';
$route['manager/admin/list_settings']                                                                = 'manager/admin_controller/settings_table';
$route['manager/admin/add_setting']                                                                  = 'manager/admin_controller/settings_form/0';
$route['manager/admin/edit_setting/(:any)']                                                          = 'manager/admin_controller/settings_form/$1';
$route['manager/admin/post_setting']                                                                 = 'manager/admin_controller/settings_post';
$route['manager/admin/list_users']                                                                   = 'manager/admin_controller/users_table';
$route['manager/admin/add_user']                                                                     = 'manager/admin_controller/users_form/0';
$route['manager/admin/edit_user/(:any)']                                                             = 'manager/admin_controller/users_form/$1';
$route['manager/admin/post_user']                                                                    = 'manager/admin_controller/users_post';
$route['manager/admin/enable_user/(:any)']                                                           = 'manager/admin_controller/users_enable/$1';
$route['manager/admin/disable_user/(:any)']                                                          = 'manager/admin_controller/users_disable/$1';
$route['manager/admin/users_report']                                                                 = 'manager/admin_controller/users_report';
$route['manager/admin/list_survey_responses']                                                        = 'manager/admin_controller/survey_response_table/0';
$route['manager/admin/list_survey_responses/(:any)']                                                 = 'manager/admin_controller/survey_response_table/$1';
$route['manager/admin/export_survey_responses/(:any)']                                               = 'manager/admin_controller/survey_response_export/$1';
/* Code added for giving admin rights to modify essay questions */
$route['manager/admin/manage_essay_questions']                                                       = 'manager/admin_controller/manage_essay_questions';
$route['manager/admin/ps_file_download']                                                     		 = 'manager/admin_controller/ps_file_download';
$route['manager/admin/edit_common_essay_questions']                                                  = 'manager/admin_controller/edit_common_essay_questions';
$route['manager/admin/save_new_essay_questions']                                                     = 'manager/admin_controller/save_new_essay_questions';
$route['manager/admin/edit_existing_essay_questions']                                                = 'manager/admin_controller/edit_existing_essay_questions';
$route['manager/admin/reorder_essay_questions']                                                      = 'manager/admin_controller/reorder_essay_questions';
$route['manager/admin/delete_essay_questions']                                                      = 'manager/admin_controller/delete_essay_questions';
$route['manager/admin/edit_pclt_essay_questions']                                                  = 'manager/admin_controller/edit_pclt_essay_questions';
$route['manager/admin/edit_mstp_essay_questions']                                                  = 'manager/admin_controller/edit_mstp_essay_questions';
/* Code added for giving admin rights to modify essay questions */
$route['manager/admin/contents']                                                                     = 'manager/admin_controller/contents';
$route['manager/admin/contents_fetch_ajax']                                                          = 'manager/admin_controller/contents_fetch_ajax';
$route['manager/admin/contents_post']                                                                = 'manager/admin_controller/contents_post';
$route['manager/admin/essays']                                                                       = 'manager/admin_controller/essays';
$route['manager/admin/essays_fetch_ajax']                                                            = 'manager/admin_controller/essays_fetch_ajax';
$route['manager/admin/essays_post']                                                                  = 'manager/admin_controller/essays_post';
$route['manager/admin/relationships']                                                                = 'manager/admin_controller/relationships';
$route['manager/admin/relationships_post']                                                           = 'manager/admin_controller/relationships_post';
$route['manager/admin/schools']                                                                      = 'manager/admin_controller/schools';
$route['manager/admin/schools_ajax']                                                                 = 'manager/admin_controller/schools_ajax';
$route['manager/admin/schools_post']                                                                 = 'manager/admin_controller/schools_post';
$route['manager/admin/schools_data_ajax']                                                            = 'manager/admin_controller/schools_data_ajax';
$route['manager/admin/list_user_info/(:any)']                                                        = 'manager/admin_controller/user_info/$1';
$route['manager/admin/help']                                                                         = 'manager/admin_controller/help';
$route['manager/admin/screening_rates']                                                              = 'manager/admin_controller/screening_rates';
$route['manager/admin/batch_status_change']                                                          = 'manager/admin_controller/batch_status_change';
$route['manager/admin/batch_status_change_new_status/(:any)']                                        = 'manager/admin_controller/batch_status_change_new_status/$1';
$route['manager/admin/batch_status_change_post']                                                     = 'manager/admin_controller/batch_status_change_post';
$route['manager/admin/edit_survey_questions/(:any)']                                                 = 'manager/admin_controller/edit_survey_questions/$1';
$route['manager/admin/edit_survey_questions']                                                        = 'manager/admin_controller/edit_survey_questions/APIS';
$route['manager/admin/post_custom_create']                                                           = 'manager/admin_controller/post_custom_create';
$route['manager/admin/post_survey_edit']                                                             = 'manager/admin_controller/post_survey_edit';
$route['manager/admin/post_new_question']                                                            = 'manager/admin_controller/post_new_question';
$route['manager/admin/delete_survey_question/(:any)/(:any)']                                         = 'manager/admin_controller/delete_survey_question/$1/$2';

/*
 * end admin
 */

/*
| -------------------------------------------------------------------------
| Manager INTERVIEW ROUTES
| -------------------------------------------------------------------------
|
| These routes are for the manager interview controllers.
|
*/
$route['manager/interviews']                                                                         = 'manager/interviews_controller/index';
$route['manager/my_interviews']                                                                      = 'manager/interviews_controller/my_interviews';
$route['manager/interviews/interview_scenarios']                                                     = 'manager/interviews_controller/interview_scenarios';
$route['manager/interviews/interview_scenario_post']                                                 = 'manager/interviews_controller/interview_scenario_post';
$route['manager/interviews/interview_scenario_delete/(:any)']                                        = 'manager/interviews_controller/interview_scenario_delete/$1';
$route['manager/interviews/user_interview_date_edit/(:any)/(:any)']                                  = 'manager/interviews_controller/user_interview_date_edit/$1/$2';
$route['manager/interviews/user_interview_date_edit_post']                                           = 'manager/interviews_controller/user_interview_date_edit_post';
$route['manager/interviews/mstp_interview_assignments/(:any)']                                       = 'manager/interviews_controller/mstp_interview_assignments/$1';
$route['manager/interviews/mstp_scheduled_interviews']                                               = 'manager/interviews_controller/mstp_scheduled_interviews';
$route['manager/interviews/mstp_interview_assignments_post']                                         = 'manager/interviews_controller/mstp_interview_assignments_post';
$route['manager/interviews/mstp_interview_assignment_delete/(:any)/(:any)']                          = 'manager/interviews_controller/mstp_interview_assignment_delete/$1/$2';
$route['manager/interviews/mstp_interview_score/(:any)/(:any)']                                      = 'manager/interviews_controller/mstp_interview_score/$1/$2';
$route['manager/interviews/mstp_interview_score_post']                                               = 'manager/interviews_controller/mstp_interview_score_post';
$route['manager/interviews/mstp_interview_edit/(:any)/(:any)']                                       = 'manager/interviews_controller/mstp_interview_edit/$1/$2';
$route['manager/interviews/user_scheduled_interviews/(:any)']                                        = 'manager/interviews_controller/user_scheduled_interviews/$1';
$route['manager/interviews/mmi_is_trained_post']                                                     = 'manager/interviews_controller/mmi_is_trained_post';
$route['manager/interviews/user_interview_date_post']                                                = 'manager/interviews_controller/user_interview_date_post';
$route['manager/interviews/user_interview_date_delete/(:any)/(:any)/(:any)']                         = 'manager/interviews_controller/user_interview_date_delete/$1/$2/$3';
$route['manager/interviews/interview_user_delete/(:any)']                                            = 'manager/interviews_controller/interview_user_delete/$1';
$route['manager/interviews/list_resources']                                                          = 'manager/interviews_controller/resources_table';
$route['manager/interviews/interview_planner/(:any)']                                                = 'manager/interviews_controller/interview_planner/$1';
$route['manager/interviews/interview_planner_sessions/(:any)']                                       = 'manager/interviews_controller/interview_planner_sessions/$1';
$route['manager/interviews/interview_planner_raters/(:any)']                                         = 'manager/interviews_controller/interview_planner_raters/$1';
$route['manager/interviews/interview_planner_applicants/(:any)']                                     = 'manager/interviews_controller/interview_planner_applicants/$1';
$route['manager/interviews/get_interview_rooms_ajax']                                                = 'manager/interviews_controller/get_interview_rooms_ajax';
$route['manager/interviews/get_interview_users_ajax']                                                = 'manager/interviews_controller/get_interview_users_ajax';
$route['manager/interviews/get_interview_essays_ajax']                                               = 'manager/interviews_controller/get_interview_essays_ajax';
$route['manager/interviews/assign_interview_essay_ajax']                                             = 'manager/interviews_controller/assign_interview_essay_ajax';
$route['manager/interviews/unlock_applicant_interview_essay_ajax']                                   = 'manager/interviews_controller/unlock_applicant_interview_essay_ajax';
$route['manager/interviews/move_applicant_session/(:any)/(:any)']                                    = 'manager/interviews_controller/move_applicant_session/$1/$2';
$route['manager/interviews/interview_planner2/(:any)/(:any)/(:any)']                                 = 'manager/interviews_controller/interview_planner2/$1/$2/$3';
$route['manager/interviews/get_interview_rooms_ajax']                                                = 'manager/interviews_controller/get_interview_rooms_ajax';
$route['manager/interviews/get_interview_users_ajax']                                                = 'manager/interviews_controller/get_interview_users_ajax';
$route['manager/interviews/get_interview_users_ajax_popup']                                          = 'manager/interviews_controller/get_interview_users_ajax_popup';
$route['manager/interviews/session_assignment_post_popup']                                           = 'manager/interviews_controller/session_assignment_post_popup';
$route['manager/interviews/session_assignment_delete_popup/(:any)']                                  = 'manager/interviews_controller/session_assignment_delete_popup/$1';
$route['manager/interviews/get_interview_scenarios_ajax']                                            = 'manager/interviews_controller/get_interview_scenarios_ajax';
$route['manager/interviews/interview_session_sanity_check_ajax']                                     = 'manager/interviews_controller/interview_session_sanity_check_ajax';
$route['manager/interviews/session_assignment_post']                                                 = 'manager/interviews_controller/session_assignment_post';
$route['manager/interviews/session_assignment_delete/(:any)']                                        = 'manager/interviews_controller/session_assignment_delete/$1';
$route['manager/interviews/session_assignment/(:any)']                                               = 'manager/interviews_controller/session_assignment/$1';
$route['manager/interviews/applicants_list/(:any)']                                                  = 'manager/interviews_controller/applicants_list/$1';
$route['manager/interviews/nametags_pdf/(:any)']                                                     = 'manager/interviews_controller/nametags_pdf/$1';
$route['manager/interviews/new_scenario_post']                                                       = 'manager/interviews_controller/new_scenario_post';
$route['manager/interviews/interview_day_pdf/(:any)']                                                = 'manager/interviews_controller/interview_day_pdf/$1';
$route['manager/interviews/applicants_pdf/(:any)']												   	 = 'manager/interviews_controller/applicants_pdf/$1';
$route['manager/interviews/new_interviewer_post']                                                    = 'manager/interviews_controller/new_interviewer_post';
$route['manager/interviews/interview_sessions']                                                      = 'manager/interviews_controller/interview_sessions';
$route['manager/interviews/interview_sessions_post']                                                 = 'manager/interviews_controller/interview_sessions_post';
$route['manager/interviews/interview_session_enable']                                        		 = 'manager/interviews_controller/interview_session_enable';
//$route['manager/interviews/interview_session_disable/(:any)']                                        = 'manager/interviews_controller/interview_session_disable/$1';
$route['manager/interviews/interview_session_delete/(:any)']                                         = 'manager/interviews_controller/interview_session_delete/$1';
$route['manager/interviews/interview_session_edit_post']                                             = 'manager/interviews_controller/interview_session_edit_post';

$route['manager/interviews/interview_scenarios']                                                     = 'manager/interviews_controller/interview_scenarios';
$route['manager/interviews/interview_scenario_post']                                                 = 'manager/interviews_controller/interview_scenario_post';
$route['manager/interviews/interview_scenario_delete/(:any)']                                        = 'manager/interviews_controller/interview_scenario_delete/$1';
$route['manager/interviews/interview_scenario_edit/(:any)']                                          = 'manager/interviews_controller/interview_scenario_edit/$1';
$route['manager/interviews/interview_scenario_delete/(:any)']                                        = 'manager/interviews_controller/interview_scenario_delete/$1';
$route['manager/interviews/interview_scenario_update']                                               = 'manager/interviews_controller/interview_scenario_update';
$route['manager/interviews/release_MSTP_ajax']                                                       = 'manager/interviews_controller/release_MSTP_ajax';
$route['manager/interviews/release_single_MSTP_ajax']                                                = 'manager/interviews_controller/release_single_MSTP_ajax';
$route['manager/interviews/release_single_pclt_ajax']                                                = 'manager/interviews_controller/release_single_pclt_ajax';
$route['manager/interviews/interview_scenario_update_with_file']                                     = 'manager/interviews_controller/interview_scenario_update_with_file';
$route['manager/interviews/interview_planner_popup/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)']                     = 'manager/interviews_controller/interview_planner_popup/$1/$2/$3/$4/$5/$6/$7';
$route['manager/interviews/interview_session_popup']                           						 = 'manager/interviews_controller/interview_session_popup';

$route['manager/interviews/download_file/(:any)']                                                    = 'manager/interviews_controller/download_file/$1';
$route['manager/interviews/final_review']                                                            = 'manager/interviews_controller/final_review';
$route['manager/interviews/final_review_post']                                                       = 'manager/interviews_controller/final_review_post';
$route['manager/interviews/mstp_interviewer_queues']                                                 = 'manager/interviews_controller/mstp_interviewer_queues';
$route['manager/interviews/mstp_interviewer_summary/(:any)']                                         = 'manager/interviews_controller/mstp_interviewer_summary/$1';
$route['manager/interviews/enable_applicant/(:any)']                                                 = 'manager/interviews_controller/enable_applicant/$1';
$route['manager/interviews/disable_applicant/(:any)']                                                = 'manager/interviews_controller/disable_applicant/$1';
$route['manager/interviews/applicant_progress_detailed_view_interviews/(:any)/(:any)/(:any)/(:any)'] = 'manager/interviews_controller/applicant_progress_detailed_view_interviews/$1/$2/$3/$4';
$route['manager/interviews/applicant_progress_detailed_view_for_user_participation/(:any)/(:any)']   = 'manager/interviews_controller/applicant_progress_detailed_view_for_user_participation/$1/$2';
$route['manager/interviews/pclt_interviews']                                                         = 'manager/interviews_controller/pclt_interviews';
$route['manager/interviews/pclt_post_mmi_interview_evaluation/(:any)']                               = 'manager/interviews_controller/pclt_interview_evaluation/$1';
$route['manager/interviews/pclt_interview_evaluation_post']                                          = 'manager/interviews_controller/pclt_interview_evaluation_post';
$route['manager/interviews/edit_pclt_questions']                                          			 = 'manager/interviews_controller/edit_pclt_questions';
/*
 * end interview
 */

/*
 * committee
 */
$route['manager/committee']                                                                          = 'manager/committee_controller/index';
$route['manager/committee/meeting_presentations']                                                    = 'manager/committee_controller/presentations/0';
$route['manager/committee/meeting_presentations/(:any)']                                             = 'manager/committee_controller/presentations/$1';
$route['manager/committee/meeting_listings']                                                         = 'manager/committee_controller/listings/0';
$route['manager/committee/meeting_listings/(:any)']                                                  = 'manager/committee_controller/listings/$1';
$route['manager/committee/meeting_dates']                                                            = 'manager/committee_controller/dates';
$route['manager/committee/post_meeting_dates']                                                       = 'manager/committee_controller/dates_post';
$route['manager/committee/delete_meeting_date/(:any)']                                               = 'manager/committee_controller/dates_delete/$1';
$route['manager/committee/meeting_applicants']                                                       = 'manager/committee_controller/applicants/0';
$route['manager/committee/meeting_applicants/(:any)']                                                = 'manager/committee_controller/applicants/$1';
$route['manager/committee/post_meeting_applicants']                                                  = 'manager/committee_controller/applicants_post';
$route['manager/committee/delete_meeting_applicant/(:any)']                                          = 'manager/committee_controller/applicants_delete/$1';
$route['manager/committee/post_applicant_score']                                                     = 'manager/committee_controller/applicant_score_post';
$route['manager/committee/post_committee_score']                                                     = 'manager/committee_controller/committee_score_post';
$route['manager/committee/committee_score_select']                                                   = 'manager/committee_controller/committee_score_select';
$route['manager/committee/meetings_scores/(:any)']                                                   = 'manager/committee_controller/meetings_scores/$1';
$route['manager/committee/committee_participation']                                                  = 'manager/committee_controller/committee_participation';
$route['manager/committee/committee_participation_details/(:any)']                                   = 'manager/committee_controller/committee_participation_details/$1';
$route['manager/committee/committee_manager_functions']                                              = 'manager/committee_controller/committee_manager_functions/0';
$route['manager/committee/committee_manager_functions/(:any)']                                       = 'manager/committee_controller/committee_manager_functions/$1';
$route['manager/committee/meeting_reschedule_post']                                                  = 'manager/committee_controller/meeting_reschedule_post';
$route['manager/committee/post_committee_quorum']                                                    = 'manager/committee_controller/committee_quorum_post';
/*
 * end committee
 */

/*
 * mstp committee
 */
$route['manager/mstp_committee']                                                                     = 'manager/mstp_committee_controller/index';
$route['manager/mstp_committee/meeting_presentations']                                               = 'manager/mstp_committee_controller/presentations/0';
$route['manager/mstp_committee/meeting_presentations/(:any)']                                        = 'manager/mstp_committee_controller/presentations/$1';
$route['manager/mstp_committee/meeting_listings']                                                    = 'manager/mstp_committee_controller/listings/0';
$route['manager/mstp_committee/meeting_listings/(:any)']                                             = 'manager/mstp_committee_controller/listings/$1';
$route['manager/mstp_committee/meeting_dates']                                                       = 'manager/mstp_committee_controller/dates';
$route['manager/mstp_committee/post_meeting_dates']                                                  = 'manager/mstp_committee_controller/dates_post';
$route['manager/mstp_committee/delete_meeting_date/(:any)']                                          = 'manager/mstp_committee_controller/dates_delete/$1';
$route['manager/mstp_committee/meeting_applicants']                                                  = 'manager/mstp_committee_controller/applicants/0';
$route['manager/mstp_committee/meeting_applicants/(:any)']                                           = 'manager/mstp_committee_controller/applicants/$1';
$route['manager/mstp_committee/post_meeting_applicants']                                             = 'manager/mstp_committee_controller/applicants_post';
$route['manager/mstp_committee/delete_meeting_applicant/(:any)']                                     = 'manager/mstp_committee_controller/applicants_delete/$1';
$route['manager/mstp_committee/post_applicant_score']                                                = 'manager/mstp_committee_controller/applicant_score_post';
$route['manager/mstp_committee/post_committee_score']                                                = 'manager/mstp_committee_controller/committee_score_post';
$route['manager/mstp_committee/mstp_committee_score_select']                                         = 'manager/mstp_committee_controller/mstp_committee_score_select';
$route['manager/mstp_committee/meetings_scores/(:any)']                                              = 'manager/mstp_committee_controller/meetings_scores/$1';
$route['manager/mstp_committee/committee_participation']                                             = 'manager/mstp_committee_controller/committee_participation';
$route['manager/mstp_committee/committee_participation_details/(:any)']                              = 'manager/mstp_committee_controller/committee_participation_details/$1';
$route['manager/mstp_committee/committee_manager_functions']                                         = 'manager/mstp_committee_controller/committee_manager_functions/0';
$route['manager/mstp_committee/committee_manager_functions/(:any)']                                  = 'manager/mstp_committee_controller/committee_manager_functions/$1';
$route['manager/mstp_committee/meeting_reschedule_post']                                             = 'manager/mstp_committee_controller/meeting_reschedule_post';
$route['manager/mstp_committee/post_committee_quorum']                                               = 'manager/mstp_committee_controller/committee_quorum_post';
$route['manager/mstp_committee/toggle_fallback']                                                     = 'manager/mstp_committee_controller/toggle_fallback';
$route['manager/mstp_committee/fallback_update']                                                     = 'manager/mstp_committee_controller/fallback_update';
/*
 * end mstp committee
 */


/*
| -------------------------------------------------------------------------
| INTERVIEW ROUTES
| -------------------------------------------------------------------------
|
| These routes are for the interview controllers.
|
*/
$route['interview']                                                                                  = 'interview/home_controller/index';
$route['interview/signin_post']                                                                      = 'interview/home_controller/index_post';
$route['interview/discussion']                                                                       = 'interview/home_controller/discussion';
$route['interview/discussion_post']                                                                  = 'interview/home_controller/discussion_post';
$route['interview/essay']                                                                            = 'interview/home_controller/essay';
$route['interview/essay_post']                                                                       = 'interview/home_controller/essay_post';
$route['interview/interview']                                                                        = 'interview/home_controller/interview';
$route['interview/interview_post']                                                                   = 'interview/home_controller/interview_post';
$route['interview/discussion_review']                                                                = 'interview/home_controller/discussion_review';
$route['interview/discussion_review_post']                                                           = 'interview/home_controller/discussion_review_post';
$route['interview/essay_review']                                                                     = 'interview/home_controller/essay_review';
$route['interview/essay_review_post']                                                                = 'interview/home_controller/essay_review_post';
$route['interview/interview_review']                                                                 = 'interview/home_controller/interview_review';
$route['interview/interview_review_post']                                                            = 'interview/home_controller/interview_review_post';
$route['interview/survey']                                                                           = 'interview/home_controller/survey';
$route['interview/survey_post']                                                                      = 'interview/home_controller/survey_post';
$route['interview/survey_response']                                                                  = 'interview/home_controller/survey_response';
$route['interview/applicant_data_ajax']                                                              = 'interview/home_controller/applicant_data_ajax';
$route['interview/signout']                                                                          = 'interview/home_controller/signout';
$route['interview']                                                                                  = 'interview/home_controller/index';
$route['interview/login']                                                                            = 'interview/home_controller/login';
$route['interview/logout']                                                                           = 'interview/home_controller/logout';
$route['interview/authenticate']                                                                     = 'interview/home_controller/authenticate';
$route['interview/shib_login_post']                                                                  = 'interview/home_controller/shib_login_post';
$route['interview/get_interview_rooms_ajax']                                                         = 'interview/home_controller/get_interview_rooms_ajax';
$route['interview/get_interview_scenarios_ajax']                                                     = 'interview/home_controller/get_interview_scenarios_ajax';
$route['interview/get_interview_applicants_ajax']                                                    = 'interview/home_controller/get_interview_applicants_ajax';
$route['interview/get_interview_reviews_ajax']                                                       = 'interview/home_controller/get_interview_reviews_ajax';
$route['interview/rating_post_ajax']                                                                 = 'interview/home_controller/rating_post_ajax';
$route['interview/home_controller/download_file/(:any)']                                             = 'interview/home_controller/download_file/$1';
$route['interview/find_if_file_exist_ajax']                                                          = 'interview/home_controller/find_if_file_exist_ajax';

/*
| -------------------------------------------------------------------------
| ERROR ROUTES
| -------------------------------------------------------------------------
|
| These routes are for the application's error controllers.
|
*/

$route['manager/(:any)']                                                                             = 'manager/home_controller/error_404';
$route['(:any)']                                                                                     = 'application/home_controller/error404';

/* End of File: routes.php */
/* Location: ./application/config/routes.php */
