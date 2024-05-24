<?php return array (
  'plugins.importexport.crossref.displayName' => 'Módulo de exportación CrossRef XML',
  'plugins.importexport.crossref.description' => 'Exportar los metadatos del artículo en formato CrossRef XML.',
  'plugins.importexport.crossref.cliUsage' => 'Uso: {$scriptName} {$pluginName} [xmlFileName] [journal_path] artículos [articleId1] [articleId2] ... {$scriptName} {$pluginName} [xmlFileName] [journal_path] número [issueId]',
  'plugins.importexport.crossref.requirements.satisfied' => 'Se satisfacen todas las dependencias de plugins.',
  'plugins.importexport.crossref.error.DOIsNotAvailable' => 'No está configurado el plugin de Identificador Público de DOI. Active y configure este plugin desde la página de configuración de <a href="{$doiUrl}" target="_blank">DOI Plugin</a>.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'No se ha configurado la Institución en la revista! Debe agregar una Institución en <a href="{$publisherUrl}" target="_blank">Paso 1.5 en Configuración de Revista</a>.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Para un correcto depósito en CrossRef, se requieren los siguientes ítems.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Nombre del depositario',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Email del depositario',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Introduzca el nombre del depositario.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Introduzca el email del depositario.',
  'plugins.importexport.crossref.settings.form.automaticRegistration' => 'Registro automático de DOIs',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS depositará los DOIs de los artículos a CrossRef según sean publicados estos artículos. Note que esto llevará un tiempo tras el proceso de publicación. Puede comprobar todos los DOIs no registrados en la <a href="{$unregisteredURL}">lista de artículos sin registrar</a>.',
  'plugins.importexport.crossref.registrationIntro' => 'Este plugin puede ser configurado para publicar automáticamente Digital Object Identifiers (DOIs) con CrossRef. Necesitará un usuario y contraseña (disponibles en <a href="http://www.crossref.org" target="_blank">CrossRef</a>) para hacerlo. Aún si no tiene usuario y contraseña propios, todavía puede exportar en el formato CrossRef XML, pero no puede registrar sus DOIs con CrossRef desde dentro de OJS.',
  'plugins.importexport.crossref.settings.description' => 'Puede <a href="{$settingsUrl}">configurar el plugin CrossRef de exportación/registratro aquí</a>.',
  'plugins.importexport.crossref.settings.form.description' => 'Configure el plugin de CrossRef de exportación/registro.',
  'plugins.importexport.crossref.settings.form.username' => 'Usuario',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Introduzca el usuario que ha obtenido de CrossRef.',
  'plugins.importexport.crossref.export.unregistered' => 'Artículos sin registrar',
  'plugins.importexport.crossref.export.selectUnregistered' => 'Seleccione los artículos no registrados',
  'plugins.importexport.crossref.export.noUnregistered' => 'Todos los artículos publicados han sido publicados (o ninguno de ellos tiene un DOI asignado)',
  'plugins.importexport.crossref.requirements' => 'Requerimientos',
  'plugins.importexport.crossref.error.pluginNotConfigured' => 'El plugin CrossRef no está configurado! Configure este plugin en la <a href="{$settingsUrl}">página de configuración</a>.',
); ?>