<?php

namespace Database\Seeders;

use App\Models\AdminMenu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('admin_menus')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        AdminMenu::insert([
            ['id' => 1, 'menu_name' => 'Dashboard', 'controller_name' => 'manage/HomeController', 'icon_class' => 'fas fa-tachometer-alt', 'p_menu_id' => 0, 's_order' => 1, 'class_id' => 'title', 'action' => 'manage/home', 'permission_id' => 10, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:30:20'],
            ['id' => 2, 'menu_name' => 'Master', 'controller_name' => '#', 'icon_class' => 'fas fa-folder-open', 'p_menu_id' => 131, 's_order' => 3, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 3, 'menu_name' => 'Settings', 'controller_name' => '#', 'icon_class' => 'fa fa-cog', 'p_menu_id' => 131, 's_order' => 75, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 4, 'menu_name' => 'Website Setting', 'controller_name' => 'manage/Settings/', 'icon_class' => 'glyphicon glyphicon-folder-close', 'p_menu_id' => 3, 's_order' => 76, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 11, 'menu_name' => 'Media', 'controller_name' => '#', 'icon_class' => 'fa fa-image', 'p_menu_id' => 131, 's_order' => 59, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 15, 'menu_name' => 'Social Link', 'controller_name' => 'manage/Social', 'icon_class' => 'fa fa-mobile', 'p_menu_id' => 131, 's_order' => 12, 'class_id' => NULL, 'action' => 'manage/sociallinks', 'permission_id' => 8, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 19, 'menu_name' => 'Upload File', 'controller_name' => 'manage/MediaController', 'icon_class' => 'fa fa-upload', 'p_menu_id' => 11, 's_order' => 60, 'class_id' => NULL, 'action' => 'manage/medias', 'permission_id' => 12, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 20, 'menu_name' => 'View File', 'controller_name' => 'manage/Media', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 11, 's_order' => 61, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 11, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 22, 'menu_name' => 'User Master', 'controller_name' => 'manage/UserController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 5, 'class_id' => NULL, 'action' => 'manage/users', 'permission_id' => 2, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:30:33'],
            ['id' => 23, 'menu_name' => 'Pages', 'controller_name' => '#', 'icon_class' => 'fa fa-file', 'p_menu_id' => 131, 's_order' => 13, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 24, 'menu_name' => 'Page Master', 'controller_name' => 'manage/PageController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 23, 's_order' => 14, 'class_id' => NULL, 'action' => 'manage/pages', 'permission_id' => 4, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:32:00'],
            ['id' => 68, 'menu_name' => 'User Privileges', 'controller_name' => 'manage/RoleController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 7, 'class_id' => NULL, 'action' => 'manage/roles', 'permission_id' => 5, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:30:42'],
            ['id' => 88, 'menu_name' => 'Admin Menu', 'controller_name' => 'manage/AdminMenuController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 6, 'class_id' => NULL, 'action' => 'manage/menus', 'permission_id' => 3, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:31:38'],
            ['id' => 90, 'menu_name' => 'Module', 'controller_name' => '#', 'icon_class' => 'fa fa-folder-o    module menu', 'p_menu_id' => 131, 's_order' => 15, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 93, 'menu_name' => 'Photo Gallery', 'controller_name' => 'manage/Gallerymaster', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 43, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 94, 'menu_name' => 'Photo Gallery Category', 'controller_name' => 'manage/Gallerycategorymaster', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 42, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 95, 'menu_name' => 'Important Links', 'controller_name' => 'manage/Importantlink', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 33, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 98, 'menu_name' => 'Rules', 'controller_name' => 'manage/Rulesacts', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 49, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 101, 'menu_name' => 'News', 'controller_name' => 'manage/News', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 39, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 104, 'menu_name' => 'Important Website', 'controller_name' => 'manage/Importantwebsite', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 34, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 105, 'menu_name' => 'Top Menu', 'controller_name' => 'manage/Frontmenu', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 110, 's_order' => 69, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 106, 'menu_name' => 'Menu Modules', 'controller_name' => 'manage/FrontMenuModuleController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 110, 's_order' => 67, 'class_id' => NULL, 'action' => 'manage/frontmenumodules', 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 107, 'menu_name' => 'Manage Slider', 'controller_name' => '#', 'icon_class' => 'fa fa-image', 'p_menu_id' => 131, 's_order' => 62, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 108, 'menu_name' => 'Top Slider', 'controller_name' => 'manage/Slider', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 107, 's_order' => 63, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 110, 'menu_name' => 'Front Menu', 'controller_name' => '#', 'icon_class' => 'fas fa-folder-open', 'p_menu_id' => 131, 's_order' => 66, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 111, 'menu_name' => 'Bottom Menu', 'controller_name' => 'manage/Frontmenu', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 110, 's_order' => 70, 'class_id' => NULL, 'action' => 'bottomMenu', 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 112, 'menu_name' => 'Projects', 'controller_name' => 'manage/Project', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 45, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 114, 'menu_name' => 'Manage Feedback', 'controller_name' => 'manage/Feedback', 'icon_class' => 'fa fa-users', 'p_menu_id' => 131, 's_order' => 58, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 129, 'menu_name' => 'Access List', 'controller_name' => 'manage/Accesslist', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 9, 'class_id' => NULL, 'action' => NULL, 'permission_id' => 5, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 130, 'menu_name' => 'Assign User Access', 'controller_name' => 'manage/Acl', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 11, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 131, 'menu_name' => 'CMS', 'controller_name' => '#', 'icon_class' => 'fas fa-folder-open', 'p_menu_id' => 0, 's_order' => 2, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 145, 'menu_name' => 'End Menu', 'controller_name' => '#', 'icon_class' => 'fa fa-cog', 'p_menu_id' => 0, 's_order' => 78, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 146, 'menu_name' => 'Video Gallery', 'controller_name' => 'manage/Videogallery', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 55, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 147, 'menu_name' => 'Video Gallery Category', 'controller_name' => 'manage/Videocategory', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 54, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 149, 'menu_name' => 'Contact Category', 'controller_name' => 'manage/Contactcategory', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 20, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 150, 'menu_name' => 'Contact Designation', 'controller_name' => 'manage/Contactdesignation', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 21, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 151, 'menu_name' => 'Manage Contacts /Whos Who', 'controller_name' => 'manage/Contactboard', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 37, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 152, 'menu_name' => 'Download', 'controller_name' => 'manage/Formsdownload', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 25, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 159, 'menu_name' => 'FAQ', 'controller_name' => 'manage/Faq', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 31, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 160, 'menu_name' => 'Bottom Slider', 'controller_name' => '/manage/Slider', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 107, 's_order' => 64, 'class_id' => NULL, 'action' => 'index/2', 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 161, 'menu_name' => 'Citizen Cornor/ Career', 'controller_name' => 'manage/Career', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 17, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 166, 'menu_name' => 'Faq Category', 'controller_name' => 'manage/FaqCategory', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 30, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 174, 'menu_name' => 'Departments', 'controller_name' => 'manage/Department', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 24, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 184, 'menu_name' => 'Tender', 'controller_name' => 'manage/Tender', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 51, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 185, 'menu_name' => 'Project Category/Phase', 'controller_name' => 'manage/Projectcategorymaster', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 44, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 189, 'menu_name' => 'Message Board', 'controller_name' => 'manage/Messageboard', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 38, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 191, 'menu_name' => 'Publication', 'controller_name' => 'manage/Publication', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 47, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 194, 'menu_name' => 'Order And Circular', 'controller_name' => 'manage/Circular', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 41, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 195, 'menu_name' => 'Circular Category', 'controller_name' => 'manage/Circularcategorymaster', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 18, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 197, 'menu_name' => 'E-magazine', 'controller_name' => 'manage/Story', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 26, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 198, 'menu_name' => 'General Rules', 'controller_name' => '/manage/Rulesacts', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 32, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 199, 'menu_name' => 'Rules Category', 'controller_name' => '/manage/Rulesactscategory', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 50, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 201, 'menu_name' => 'Publication Category', 'controller_name' => 'manage/PublicationCategory', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 46, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 202, 'menu_name' => 'Home Page Links', 'controller_name' => 'manage/Googlesheet', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 36, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 203, 'menu_name' => 'Cube Slider', 'controller_name' => 'manage/Cube', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 107, 's_order' => 65, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 204, 'menu_name' => 'Rti', 'controller_name' => 'manage/Rti', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 48, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 206, 'menu_name' => 'Circular', 'controller_name' => 'manage/Circular', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 19, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 207, 'menu_name' => 'What\\\'s New', 'controller_name' => 'manage/Whatsnew', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 56, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 208, 'menu_name' => 'Testimonial', 'controller_name' => 'manage/Testimonial', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 52, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 209, 'menu_name' => 'Events', 'controller_name' => 'manage/Events', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 27, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 210, 'menu_name' => 'Vacancies', 'controller_name' => 'manage/career', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 53, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 211, 'menu_name' => 'Infrastructure', 'controller_name' => 'manage/Infrastructure', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 35, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 212, 'menu_name' => 'Footer Menu', 'controller_name' => 'manage/Frontmenu', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 110, 's_order' => 71, 'class_id' => NULL, 'action' => 'footerMenu', 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 213, 'menu_name' => 'Header Menu', 'controller_name' => 'manage/Frontmenu', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 110, 's_order' => 68, 'class_id' => NULL, 'action' => 'headerMenu', 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 214, 'menu_name' => 'Sidebar Menu', 'controller_name' => 'manage/FrontMenu', 'icon_class' => 'fa fa-left-o-right', 'p_menu_id' => 110, 's_order' => 72, 'class_id' => NULL, 'action' => 'sidebarMenu', 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 215, 'menu_name' => 'Facility', 'controller_name' => 'manage/Services', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 28, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 216, 'menu_name' => 'Notification', 'controller_name' => 'manage/CustomNotification', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 40, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 217, 'menu_name' => 'Courses', 'controller_name' => 'manage/Courses', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 23, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 218, 'menu_name' => 'Faculty', 'controller_name' => 'manage/Faculty', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 29, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 219, 'menu_name' => 'Sidebar Menu', 'controller_name' => '#', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 131, 's_order' => 73, 'class_id' => 'title', 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 220, 'menu_name' => 'Sidebar List', 'controller_name' => 'manage/SidebarType', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 219, 's_order' => 74, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 221, 'menu_name' => 'Annual Report', 'controller_name' => 'manage/Noticeboard', 'icon_class' => 'fa  fa-hand-o-right', 'p_menu_id' => 90, 's_order' => 16, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 222, 'menu_name' => 'National Framework', 'controller_name' => 'manage/Framework', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 57, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 224, 'menu_name' => 'Calendar Setting', 'controller_name' => 'manage/Settings/calendar', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 3, 's_order' => 77, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 225, 'menu_name' => 'Contact Location', 'controller_name' => 'manage/Location', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 90, 's_order' => 22, 'class_id' => NULL, 'action' => NULL, 'permission_id' => NULL, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-13 05:22:25'],
            ['id' => 226, 'menu_name' => 'Permission', 'controller_name' => 'manage/PermissionController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 8, 'class_id' => NULL, 'action' => 'manage/permissions', 'permission_id' => 8, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:30:51'],
            ['id' => 227, 'menu_name' => 'Database Routes', 'controller_name' => 'manage/DatabaseRouteController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 10, 'class_id' => NULL, 'action' => 'manage/databaseroutes', 'permission_id' => 11, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:31:50'],
            ['id' => 228, 'menu_name' => 'Admin Master', 'controller_name' => 'manage/AdminController', 'icon_class' => 'fa fa-hand-point-right', 'p_menu_id' => 2, 's_order' => 4, 'class_id' => NULL, 'action' => 'manage/admins', 'permission_id' => 1, 'tab_same_new' => 1, 'is_active' => 1, 'deleted_at' => NULL, 'created_at' => '2023-10-13 05:22:25', 'updated_at' => '2023-10-18 07:31:18'],
        ]);
    }
}
