<?php
/*
 -------------------------------------------------------------------------
 Fields plugin for GLPI
 Copyright (C) 2016 by the Fields Development Team.

 https://github.com/pluginsGLPI/fields
 -------------------------------------------------------------------------

 LICENSE

 This file is part of Fields.

 Fields is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Fields is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Fields. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include ('../../../inc/includes.php');


$translation = new PluginFieldsLabelTranslation();
if (isset($_POST['add'])) {
   $translation->add($_POST);

} else if (isset($_POST['update'])) {
   $translation->update($_POST);
} else if (isset($_POST['purge'])) { // INICIO [CRI] : Elimina una traducción permanentemente desde el botón eliminar de la traducción
   $translation->delete($_POST);
} // FINAL [CRI] : Elimina una traducción permanentemente desde el botón eliminar de la traducción



Html::back();
