<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namespace')->default('*');
            $table->index('namespace');
            $table->string('group');
            $table->index('group');
            $table->text('key');
            $table->jsonb('text');
            $table->jsonb('metadata')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        \DB::table('translations')->insert(array (
            0 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'forms.select_a_date',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'operation.succeeded',
                    'text' => '{"en": "Operation successful", "es": "Operación exitosa"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'operation.failed',
                    'text' => '{"en": "Operation failed", "es": "Operación fallida"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'operation.not_allowed',
                    'text' => '{"en": "Operation not allowed", "es": "Operación no permitida"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            4 =>
                array (
                    'namespace' => '*',
                    'group' => 'passwords',
                    'key' => 'reset-password-notification',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            5 =>
                array (
                    'namespace' => '*',
                    'group' => 'passwords',
                    'key' => 'you-are-receiving-this-email-because-we-received-a-password-reset-request-for-your-account',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            6 =>
                array (
                    'namespace' => '*',
                    'group' => 'passwords',
                    'key' => 'reset-password',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            7 =>
                array (
                    'namespace' => '*',
                    'group' => 'passwords',
                    'key' => 'link-will-expire',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            8 =>
                array (
                    'namespace' => '*',
                    'group' => 'passwords',
                    'key' => 'if-you-did-not-request-a-password-reset-no-further-action-is-required',
                    'text' => '{"en": "If you did not request a password reset, no further action is required.", "es": "Si no solicitaste un restablecimiento de contraseña, no se requiere ninguna acción."}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            9 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.first_name',
                    'text' => '{"en": "First name", "es": "Nombre"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            10 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.last_name',
                    'text' => '{"en": "Last name", "es": "Apellido"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            11 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.email',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            12 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.password',
                    'text' => '{"en": "Password", "es": "Contraseña"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            13 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.password_repeat',
                    'text' => '{"en": "Password Confirmation", "es": "Confirmación de contrseña"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            14 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.activated',
                    'text' => '{"en": "Activated", "es": "Activado"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            15 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.forbidden',
                    'text' => '{"en": "Forbidden", "es": "Prohibido"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            16 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.language',
                    'text' => '{"en": "Language", "es": "Idioma"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            17 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'forms.select_an_option',
                    'text' => '{"en": "Select an option", "es": "Selecciona una opción"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            18 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.roles',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            19 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'forms.select_options',
                    'text' => '{"en": "Select options", "es": "Seleccione opciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            20 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.actions.create',
                    'text' => '{"en": "New User", "es": "Nuevo Usario"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            21 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.save',
                    'text' => '{"en": "Save", "es": "Grabar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            22 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.actions.edit',
                    'text' => '{"en": "Edit :name", "es": "Editar :name"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            23 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.actions.index',
                    'text' => '{"en": "Users", "es": "Usuarios"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            24 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'placeholder.search',
                    'text' => '{"en": "Search", "es": "Buscar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            25 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.search',
                    'text' => '{"en": "Search", "es": "Buscar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            26 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'admin-user.columns.id',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            27 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.edit',
                    'text' => '{"en": "Edit", "es": "Editar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            28 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.delete',
                    'text' => '{"en": "Delete", "es": "Borrar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            29 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'pagination.overview',
                    'text' => '{"en": "Displaying items from {{ pagination.state.from }} to {{ pagination.state.to }} of total {{ pagination.state.total }} items.", "es": "Mostrando items de {{ pagination.state.from }} a {{ pagination.state.to }} de {{ pagination.state.total }} items."}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            30 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'index.no_items',
                    'text' => '{"en": "Could not find any items", "es": "No se pudo encontrar ningún item"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            31 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'index.try_changing_items',
                    'text' => '{"en": "Try changing the filters or add a new one", "es": "Intente cambiando los filtros o agregue uno nuevo"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            32 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.new',
                    'text' => '{"en": "New", "es": "Nuevo"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            33 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'forms.select_date_and_time',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            34 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'profile_dropdown.account',
                    'text' => '{"en": "Account", "es": "Cuenta"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            35 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'profile_dropdown.profile',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            36 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'profile_dropdown.password',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            37 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'profile_dropdown.logout',
                    'text' => '{"en": "Logout", "es": "Salir"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            38 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'sidebar.content',
                    'text' => '{"en": "Content", "es": "Contenido"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            39 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'sidebar.settings',
                    'text' => '{"en": "Settings", "es": "Configuraciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:19',
                    'deleted_at' => NULL,
                ),
            40 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.dates',
                    'text' => '{"en": "Dates", "es": "Fechas"}',
                    'metadata' => NULL,
                    'created_at' => '2020-09-21 07:31:51',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            41 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.sectors',
                    'text' => '{"en": "Sectors", "es": "Sectores"}',
                    'metadata' => NULL,
                    'created_at' => '2020-09-21 07:31:51',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            42 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'btn.menus',
                    'text' => '{"en": "Menus", "es": "Menus"}',
                    'metadata' => NULL,
                    'created_at' => '2020-09-21 07:31:51',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            43 =>
                array (
                    'namespace' => '*',
                    'group' => 'admin',
                    'key' => 'user.columns.phone',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            44 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'media_uploader.max_number_of_files',
                    'text' => '{"en": "(max no. of files: :maxNumberOfFiles files)", "es": "(Nro máximo de archivos: :maxNumberOfFiles archivos)"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            45 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'media_uploader.max_size_pre_file',
                    'text' => '{"en": "(max size per file: :maxFileSize MB)", "es": "(tamaño máximo por archivo: :maxFileSize MB)"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            46 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'media_uploader.private_title',
                    'text' => '{"en": "Files are not accessible for public", "es": "Los archivos no son públicos"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            47 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'login.title',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            48 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'login.sign_in_text',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            49 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'auth_global.email',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            50 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'auth_global.password',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            51 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'login.button',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            52 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'login.forgot_password',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            53 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'title',
                    'text' => '{"en": "Translations", "es": "Traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            54 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.all_groups',
                    'text' => '{"en": "All groups", "es": "Todos los grupos"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            55 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.edit',
                    'text' => '{"en": "Edit translation", "es": "Editar traducción"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            56 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.default_text',
                    'text' => '{"en": "Default text", "es": "Texto por defecto"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            57 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.translation',
                    'text' => '{"en": "translation", "es": "traducción"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            58 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.translation_for_language',
                    'text' => '{"en": "Type a translation for :locale language.", "es": "Escribe una traducción en :locale."}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            59 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.title',
                    'text' => '{"en": "Translations import", "es": "Importar traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            60 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.notice',
                    'text' => '{"en": "You can import translations of a selected language from the .xslx file. Imported file must have identical structure as generated in Translations export.", "es": "Puedes importar traducciones de un idioma seleccionador desde un archivo .xslx. El archivo importado debe tener la misma estructura que la generada por la exportación de Traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            61 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.upload_file',
                    'text' => '{"en": "Upload File", "es": "Subir Archivo"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            62 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.choose_file',
                    'text' => '{"en": "Choose file", "es": "Selecciona archivo"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            63 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.language_to_import',
                    'text' => '{"en": "Language to import", "es": "Idioma a importar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            64 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'fields.select_language',
                    'text' => '{"en": "Select language", "es": "Selecciona el idioma"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            65 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.do_not_override',
                    'text' => '{"en": "Do not override existing translations", "es": "No sobreescribir las traducciones existentes"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            66 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.conflict_notice_we_have_found',
                    'text' => '{"en": "We have found", "es": "Encontramos"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            67 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.conflict_notice_translations_to_be_imported',
                    'text' => '{"en": "translations in total to be imported. Please review", "es": "Traducciones a ser importadas. Por favor revíselas"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            68 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.conflict_notice_differ',
                    'text' => '{"en": "translations that differs before continuing.", "es": "traducciones que difieren antes de continuar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            69 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'fields.group',
                    'text' => '{"en": "Group", "es": "Grupo"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            70 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'fields.default',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            71 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'fields.current_value',
                    'text' => '{"en": "Current value", "es": "Valor actual"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            72 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'fields.imported_value',
                    'text' => '{"en": "Imported value", "es": "Valor importado"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            73 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.sucesfully_notice',
                    'text' => '{"en": "translations sucesfully imported", "es": "traducciones importadas exitósamente"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            74 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'import.sucesfully_notice_update',
                    'text' => '{"en": "translations sucesfully updated.", "es": "traducciones actualizadas exitósamente"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            75 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.export',
                    'text' => '{"en": "Translations export", "es": "Exportar traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            76 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'export.notice',
                    'text' => '{"en": "You can export translations of a selected language as .xslx file.", "es": "Puedes importar traducciones de un idioma desde un archivo  xslx."}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            77 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'export.language_to_export',
                    'text' => '{"en": "Language to export", "es": "Idioma a exportar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            78 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'btn.export',
                    'text' => '{"en": "Export", "es": "Exportar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            79 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.title',
                    'text' => '{"en": "Translations list", "es": "Lista de traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            80 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'btn.import',
                    'text' => '{"en": "Import", "es": "Importar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            81 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'btn.re_scan',
                    'text' => '{"en": "Re-scan translations", "es": "Re-scan traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            82 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.no_items',
                    'text' => '{"en": "Could not find any translations", "es": "No se encontraron traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            83 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'index.try_changing_items',
                    'text' => '{"en": "Try changing the filters or re-scan", "es": "Intenta cambiar los filtros or re-scanea"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            84 =>
                array (
                    'namespace' => '*',
                    'group' => 'passwords',
                    'key' => 'hello',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            85 =>
                array (
                    'namespace' => '*',
                    'group' => 'passwords',
                    'key' => 'regards',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            86 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'activations',
                    'key' => 'email.line',
                    'text' => '{"en": "You are receiving this email because we received an activation request for your account.", "es": "Estás recibiendo este email porque recepcionamos una solicitud de activación para tu cuenta"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            87 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'activations',
                    'key' => 'email.action',
                    'text' => '{"en": "Activate your account", "es": "Activa tu cuenta"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            88 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'activations',
                    'key' => 'email.notRequested',
                    'text' => '{"en": "If you did not request an activation, no further action is required.", "es": "Si no solicitaste una activación, no se requiere ninguna acción"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            89 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'activations.activated',
                    'text' => '{"en": "Your account was activated!", "es": "Tu cuenta fue activada!"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            90 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'activations.invalid_request',
                    'text' => '{"en": "The request failed.", "es": "La solicitud falló"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            91 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'activations.disabled',
                    'text' => '{"en": "Activation is disabled.", "es": "La activación está desactivada."}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            92 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'activations.sent',
                    'text' => '{"en": "We have sent you an activation link!", "es": "Te hemos enviado una link de activación!"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            93 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'passwords.sent',
                    'text' => '{"en": "We have sent you a password reset link!", "es": "Te hemos enviado un link de restablecimiento de contraseña!"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            94 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'passwords.reset',
                    'text' => '{"en": "Your password has been reset!", "es": "Tu contraseña ha sido restablecida!"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            95 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'passwords.invalid_token',
                    'text' => '{"en": "The password reset token is invalid.", "es": "El token del restablecimiento de contraseña es inválido."}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            96 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'passwords.invalid_user',
                    'text' => '{"en": "We can\'t find a user with this e-mail address.", "es": "No pudimos encontrar un usuario con esta dirección de email."}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            97 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'passwords.invalid_password',
                    'text' => '{"en": "Password must be at least six characters long and match the confirmation.", "es": "La contraseña debe tener al menos 6 caracteres y coincidir con la confirmación"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            98 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'resets',
                    'key' => 'email.line',
                    'text' => '{"en": "You are receiving this email because we received a password reset request for your account.", "es": "Estás recibiendo este email porque recibimos una solicitud de restablecimiento para tu cuenta."}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            99 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'resets',
                    'key' => 'email.action',
                    'text' => '{"en": "Reset Password", "es": "Restablecer Contraseña"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            100 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'resets',
                    'key' => 'email.notRequested',
                    'text' => '{"en": "If you did not request a password reset, no further action is required.", "es": "Si no solicitaste un restablecimiento de contraseña, no se requiere ninguna acción"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            101 =>
                array (
                    'namespace' => '*',
                    'group' => 'auth',
                    'key' => 'failed',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            102 =>
                array (
                    'namespace' => '*',
                    'group' => 'auth',
                    'key' => 'throttle',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            103 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'activation_form.title',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            104 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'activation_form.note',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            105 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'activation_form.button',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            106 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'forgot_password.title',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            107 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'forgot_password.note',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            108 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'forgot_password.button',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            109 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'password_reset.title',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            110 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'password_reset.note',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            111 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'auth_global.password_confirm',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            112 =>
                array (
                    'namespace' => 'brackets/admin-auth',
                    'group' => 'admin',
                    'key' => 'password_reset.button',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            113 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'footer.powered_by',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            114 =>
                array (
                    'namespace' => 'brackets/admin-translations',
                    'group' => 'admin',
                    'key' => 'fields.created_at',
                    'text' => '{"en": "Created at", "es": "Creada en"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            115 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Reset Password',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            116 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Your application was approved',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            117 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Your application was rejected',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            118 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Please verify your E-mail',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-08-25 09:24:26',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            119 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Images',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2021-04-18 21:35:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            120 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Manage access',
                    'text' => '{"en": "Manage access", "es": "Accesos"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            121 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Translations',
                    'text' => '{"en": "Translations", "es": "Traducciones"}',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            122 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Configuration',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2020-06-30 14:04:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            123 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Poster',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2021-04-18 21:35:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            124 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Banners',
                    'text' => '[]',
                    'metadata' => NULL,
                    'created_at' => '2021-04-18 21:35:47',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            125 =>
                array (
                    'namespace' => '*',
                    'group' => '*',
                    'key' => 'Close',
                    'text' => '{"en": "Close", "es": "Cerrar"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
            126 =>
                array (
                    'namespace' => 'brackets/admin-ui',
                    'group' => 'admin',
                    'key' => 'page_title_suffix',
                    'text' => '{"en": "boilerplate", "es": "boilerplate"}',
                    'metadata' => NULL,
                    'created_at' => '2020-07-05 22:24:22',
                    'updated_at' => '2021-04-20 18:16:20',
                    'deleted_at' => NULL,
                ),
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('translations');
    }
}
