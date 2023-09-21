<?php
// Incluye el contenido de template_driver (una sola vez)

require_once "drivers/template_driver";

// Crea una instancia y carga la plantilla que esta en su interior.

$template = new TemplateDriver();
$template -> BringTemplate();