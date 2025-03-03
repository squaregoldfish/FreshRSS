<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'about' => array(
		'_' => 'Over',
		'agpl3' => '<a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL 3</a>',	// IGNORE
		'bugs_reports' => 'Rapporteer fouten',
		'credits' => 'Waarderingen',
		'credits_content' => 'Sommige ontwerp elementen komen van <a href="http://twitter.github.io/bootstrap/">Bootstrap</a> alhoewel FreshRSS dit raamwerk niet gebruikt. <a href="https://gitlab.gnome.org/Archive/gnome-icon-theme-symbolic">Pictogrammen</a> komen van het <a href="https://www.gnome.org/">GNOME project</a>. <em>De Open Sans</em> font police is gemaakt door <a href="https://fonts.google.com/specimen/Open+Sans">Steve Matteson</a>. FreshRSS is gebaseerd op <a href="https://framagit.org/marienfressinaud/MINZ">Minz</a>, een PHP raamwerk. Nederlandse vertaling door Wanabo, <a href="http://www.nieuwskop.be" title="NieuwsKop">NieuwsKop.be</a>. Link naar de Nederlandse vertaling, <a href="https://github.com/Wanabo/FreshRSS-Dutch-translation/tree/master">FreshRSS-Dutch-translation</a>.',
		'documentation' => 'Documentation',	// TODO
		'freshrss_description' => 'FreshRSS is een RSS-feed aggregator om zelf te hosten. Het gebruikt weinig systeembronnen en is makkelijk te beheren terwijl het een krachtig en makkelijk te configureren programma is.',
		'github' => '<a href="https://github.com/FreshRSS/FreshRSS/issues">op Github</a>',
		'license' => 'Licentie',
		'project_website' => 'Projectwebsite',
		'title' => 'Over',
		'version' => 'Versie',	// IGNORE
	),
	'feed' => array(
		'add' => 'U kunt wat feeds toevoegen.',
		'empty' => 'Er is geen artikel om te laten zien.',
		'rss_of' => 'RSS-feed van %s',
		'title' => 'Overzicht',
		'title_fav' => 'Favorieten',
		'title_global' => 'Globale weergave',
	),
	'log' => array(
		'_' => 'Log bestanden',
		'clear' => 'Leeg de log bestanden',
		'empty' => 'Log bestand is leeg',
		'title' => 'Log bestanden',
	),
	'menu' => array(
		'about' => 'Over FreshRSS',
		'before_one_day' => 'Ouder dan een dag',
		'before_one_week' => 'Ouder dan een week',
		'bookmark_query' => 'Huidige query opslaan',
		'favorites' => 'Favorieten (%s)',
		'global_view' => 'Globale weergave',
		'main_stream' => 'Overzicht',
		'mark_all_read' => 'Markeer alles als gelezen',
		'mark_cat_read' => 'Markeer categorie als gelezen',
		'mark_feed_read' => 'Markeer feed als gelezen',
		'mark_selection_unread' => 'Markeer selectie als ongelezen',
		'newer_first' => 'Nieuwste eerst',
		'non-starred' => 'Laat alles zien behalve favorieten',
		'normal_view' => 'Normale weergave',
		'older_first' => 'Oudste eerst',
		'queries' => 'Gebruikers queries',
		'read' => 'Laat alleen gelezen zien',
		'reader_view' => 'Lees modus',
		'rss_view' => 'RSS-feed',
		'search_short' => 'Zoeken',
		'starred' => 'Laat alleen favorieten zien',
		'stats' => 'Statistieken',
		'subscription' => 'Abonnementen beheer',
		'tags' => 'Mijn labels',
		'unread' => 'Laat alleen ongelezen zien',
	),
	'share' => 'Delen',
	'tag' => array(
		'related' => 'Verwante labels',
	),
	'tos' => array(
		'title' => 'Gebruiksvoorwaarden',
	),
);
