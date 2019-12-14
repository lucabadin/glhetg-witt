<?php
// Version: 2.0.15; index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'tzl_TZL';
$txt['lang_dictionary'] = 'tzl';
$txt['lang_spelling'] = 'proviziunal';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'ISO-8859-1';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Súladi', 'Lúneçi', 'Maitzi', 'Márcuri', 'Xhúadi', 'Viénerçi', 'Sáturi');
$txt['days_short'] = array('Sul', 'Lun', 'Mtz', 'Mar', 'Xhu', 'Vie', 'Sat');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januar', 'Schevraglh', 'Març', 'Avrïu', 'Mai', 'Gün', 'Juliă', 'Guscht', 'Setemvar', 'Listopäts', 'Noemvar', 'Zecemvar');
$txt['months_titles'] = array(1 => 'Januar', 'Schevraglh', 'Març', 'Avrïu', 'Mai', 'Gün', 'Juliă', 'Guscht', 'Setemvar', 'Listopäts', 'Noemvar', 'Zecemvar');
$txt['months_short'] = array(1 => 'Jan', 'Sch', 'Mar', 'Avr', 'Mai', 'Gün', 'Jul', 'Gus', 'Set', 'Lis', 'Noe', 'Zec');

$txt['time_am'] = 'd\'avant';
$txt['time_pm'] = 'd\'osprei';

$txt['newmessages0'] = 'isch noveu';
$txt['newmessages1'] = 'sint noveux';
$txt['newmessages3'] = 'Noveu';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Ädmin';
$txt['moderate'] = 'Moderar';

$txt['save'] = 'Guardar';

$txt['modify'] = 'Modificar';
$txt['forum_index'] = '%1$s - Index';
$txt['members'] = 'Membreux';
$txt['board_name'] = 'Nómină del scumpart';
$txt['posts'] = 'Posts';

$txt['member_postcount'] = 'Posts';
$txt['no_subject'] = '(Aucün subxhect)';
$txt['view_profile'] = 'Risguardar profil';
$txt['guest_title'] = 'Gäst';
$txt['author'] = 'Auþor';
$txt['on'] = 'sür';
$txt['remove'] = 'Removar';
$txt['start_new_topic'] = 'Començar noveu topic';

$txt['login'] = 'S\'anonçar';
// Use numeric entities in the below string.
$txt['username'] = 'Codă da sámbånd';
$txt['password'] = 'Teßeră';

$txt['username_no_exist'] = 'Această codă da sámbånd non exista.';
$txt['no_user_with_email'] = 'Non j\'ont dals codăs da sámbånd aßoçiatadăs cün acest telepost.';

$txt['board_moderator'] = 'Admod del scumpart';
$txt['remove_topic'] = 'Removar topic';
$txt['topics'] = 'Topici';
$txt['modify_msg'] = 'Modificar mensatx';
$txt['name'] = 'Nómină';
$txt['email'] = 'Telepost';
$txt['subject'] = 'Subxhect';
$txt['message'] = 'Mensatx';
$txt['redirects'] = 'Adversiuns';
$txt['quick_modify'] = 'Modificar lignhal';

$txt['choose_pass'] = 'Çoiçar teßeră';
$txt['verify_pass'] = 'Reprovar teßeră';
$txt['position'] = 'Posiziun';

$txt['profile_of'] = 'Risguardar el profil da(ð)';
$txt['total'] = 'Total';
$txt['posts_made'] = 'Posts';
$txt['website'] = 'Siteu WWW';
$txt['register'] = 'Enrexhistrar';
$txt['warning_status'] = 'Statüs d\'aviß';
$txt['user_warn_watch'] = 'Uçeir isch sür list da sürvixhilă admodal';
$txt['user_warn_moderate'] = 'Posts d\'uçeir s\'axhuntent à coă d\'approval';
$txt['user_warn_mute'] = 'Uçeir isch xhexhünescu da postar';
$txt['warn_watch'] = 'Sürvixhilescu';
$txt['warn_moderate'] = 'Moderescu';
$txt['warn_mute'] = 'Scumentescu';

$txt['message_index'] = 'Index da mensatx';
$txt['news'] = 'Noveschti';
$txt['home'] = 'Casă';

$txt['lock_unlock'] = 'Feischar/atcrivar topic';
$txt['post'] = 'Post';
$txt['error_occured'] = '¡Ün ärör tent paßat!';
$txt['at'] = 'à';
$txt['logout'] = 'Zespartar';
$txt['started_by'] = 'Començescu par';
$txt['replies'] = 'Contestăs';
$txt['last_post'] = 'Post pü recent';
$txt['admin_login'] = 'Login d\'aðmistraziun';
// Use numeric entities in the below string.
$txt['topic'] = 'Topic';
$txt['help'] = 'Aßistançéu';
$txt['notify'] = 'Avisar';
$txt['unnotify'] = 'Inavisar';
$txt['notify_request'] = '¿Veletz-voi ün telepost avisind schi quálseviens rezïa à\'cest topic?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Corxhalmint,' . "\n" . 'l\'esqipa da ' . $context['forum_name'] . '.';
$txt['notify_replies'] = 'Avisar da contestăs';
$txt['move_topic'] = 'Movar topic';
$txt['move_to'] = 'Movar à';
$txt['pages'] = 'Páxhinăs';
$txt['users_active'] = 'Uçeirs actïus in els %1$d míuts paßats';
$txt['personal_messages'] = 'Mensatxen perziunais';
$txt['reply_quote'] = 'Rezirar cün quotaziun';
$txt['reply'] = 'Rezirar';
$txt['reply_noun'] = 'Rezirar';
$txt['approve'] = 'Aprovar';
$txt['approve_all'] = 'aprovar toct';
$txt['awaiting_approval'] = 'Aschteptind approval';
$txt['attach_awaiting_approve'] = 'Estacadăs aschteptinds approval';
$txt['post_awaiting_approval'] = 'Aviß: Acest mensatx aschtepta l\'approval par ün admod.';
$txt['there_are_unapproved_topics'] = 'J\'ont %1$s topici es %2$s posts qi aschteptent l\'approval in acest scumpart. Clichetz <a href="%3$s">aicì</a> à vidar toct da ça.';

$txt['msg_alert_none'] = 'Aucün mensatxen...';
$txt['msg_alert_you_have'] = 'voi tenetz';
$txt['msg_alert_messages'] = 'mensatxen';
$txt['remove_message'] = 'Removar acest mensatx';

$txt['online_users'] = 'Uçeirs sürlignhă';
$txt['personal_message'] = 'Mensatx perziunal';
$txt['jump_to'] = 'Xhempar à';
$txt['go'] = 'ir';
$txt['are_sure_remove_topic'] = '¿Estetz-voi sigür qe voi veletz removar acest topic?';
$txt['yes'] = 'Üc';
$txt['no'] = 'Non';

$txt['search_end_results'] = 'Fim dals resultaes';
$txt['search_on'] = 'sür';

$txt['search'] = 'Çerçar';
$txt['all'] = 'Toct';

$txt['back'] = 'Rüc';
$txt['password_reminder'] = 'Remeindeir da teßeră';
$txt['topic_started'] = 'Topic començat par';
$txt['title'] = 'Titlă';
$txt['post_by'] = 'Post par';
$txt['memberlist_searchable'] = 'List çerçaval da toct i membreux enrexhistrats';
$txt['welcome_member'] = 'Sch\'o voi piaça, benvenetz-voi';
$txt['admin_center'] = 'Centreu d\'aðmistraziun';
$txt['last_edit'] = 'Redactaziun pü recent';
$txt['notify_deactivate'] = '¿Veladretz-voi zisactivar dals avisaziuns sür acest topic?';

$txt['recent_posts'] = 'Posts recents';

$txt['location'] = 'Locaziun';
$txt['gender'] = 'Xhendreu';
$txt['date_registered'] = 'Däts d\'anuntziă';

$txt['recent_view'] = 'View the most recent posts on the forum.';
$txt['recent_updated'] = 'is the most recently updated topic';

$txt['male'] = 'Masleu';
$txt['female'] = 'Femeglheu';

$txt['error_invalid_characters_username'] = 'Caractréu ingültec\'h uçescu in codă da sámbånd.';

$txt['welcome_guest'] = 'Benvenescu, <strong>%1$s</strong>. <a href="' . $scripturl . '?action=login">S\'anonçetz-voi</a> eda <a href="' . $scripturl . '?action=register">enrexhistretz-voi</a>, sch\'o voi piaça.';
$txt['login_or_register'] = '<a href="' . $scripturl . '?action=login">S\'anonçetz-voi</a> eda <a href="' . $scripturl . '?action=register">enrexhistretz-voi</a>, sch\'o voi piaça.';
$txt['welcome_guest_activate'] = '<br />¿Non reçeitevetz-voi voastra <a href="' . $scripturl . '?action=activate">telepost d\'enrexhistraziun</a>?';
$txt['hello_member'] = 'Azul,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Benvenescu,';
$txt['welmsg_hey'] = 'Azul,';
$txt['welmsg_welcome'] = 'Benvenescu,';
$txt['welmsg_please'] = 'Sch\'o voi piaça,';
$txt['select_destination'] = 'Selectetz-voi ün destinaçal, sch\'o voi piaça.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Postat par';

$txt['icon_smiley'] = 'Vridi';
$txt['icon_angry'] = 'Ambrulént';
$txt['icon_cheesy'] = 'Caischat';
$txt['icon_laugh'] = 'Ridar';
$txt['icon_sad'] = 'Tristeu';
$txt['icon_wink'] = 'Quignhar';
$txt['icon_grin'] = 'Riscanar';
$txt['icon_shocked'] = 'Schockescu';
$txt['icon_cool'] = 'Cumpeténs';
$txt['icon_huh'] = 'Oho';
$txt['icon_rolleyes'] = 'Rotlar els uglhen';
$txt['icon_tongue'] = 'Glhimbă';
$txt['icon_embarrassed'] = 'Embraßescu';
$txt['icon_lips'] = 'Labrăs saxheladăs';
$txt['icon_undecided'] = 'Inzecidescu';
$txt['icon_kiss'] = 'Baiçar';
$txt['icon_cry'] = 'Plörar';

$txt['moderator'] = 'Admod';
$txt['moderators'] = 'Admods';

$txt['mark_board_read'] = 'Marcar topici come lirats per acest scumpart';
$txt['views'] = 'Vischtăs';
$txt['new'] = 'Noveu';

$txt['view_all_members'] = 'Risguardar toct i membreux';
$txt['view'] = 'Risguardar';

$txt['viewing_members'] = 'Risguardind membreux %1$s à %2$s';
$txt['of_total_members'] = 'da %1$s membreux totais';

$txt['forgot_your_password'] = '¿Oblievetz-voi voastră teßeră?';

$txt['date'] = 'Däts';
// Use numeric entities in the below string.
$txt['from'] = 'Da';
$txt['check_new_messages'] = 'Controlar noveux mensatxen';
$txt['to'] = 'À';

$txt['board_topics'] = 'Topici';
$txt['members_title'] = 'Membreux';
$txt['members_list'] = 'List da membreux';
$txt['new_posts'] = 'Noveux posts';
$txt['old_posts'] = 'Aucün noveux posts';
$txt['redirect_board'] = 'Dedütxar scumpart';

$txt['sendtopic_send'] = 'Envoxhiar';
$txt['report_sent'] = 'Voastra report tent estescu envoxhiat riuschladămint.';

$txt['time_offset'] = 'Falsacord da þorăs';
$txt['or'] = 'eda';

$txt['no_matches'] = 'Apoloxhaes, aucün cópuis füvent trovats';

$txt['notification'] = 'Avisă';

$txt['your_ban'] = 'Apoloxhaes %1$s, ¡voi estetz xhexhünescu d\'úçar acest tagoror!';
$txt['your_ban_expires'] = 'Această xhexhünaziun expirarha %1$s.';
$txt['your_ban_expires_never'] = 'Această xhexhünaziun non expirarha txamais.';
$txt['ban_continue_browse'] = 'Voi pevetz restar föglhetind el tagoror com\'iens gäst.';

$txt['mark_as_read'] = 'Marcar TOCT i mensatxen come lirats';

$txt['hot_topics'] = 'Topic caldeu (Pü qe %1$d contestăs)';
$txt['very_hot_topics'] = 'Topic trei caldeu (Pü qe %1$d contestăs)';
$txt['locked_topic'] = 'Topic feischat';
$txt['normal_topic'] = 'Topic normal';
$txt['participation_caption'] = 'Topic in qet voi tenetz postat';

$txt['go_caps'] = 'IR';

$txt['print'] = 'Printar';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Resümadă del topic';
$txt['not_applicable'] = 'N/A';
$txt['message_lowercase'] = 'mensatx';
$txt['name_in_use'] = 'Această nómină detxa isch uçadă par ün altreu membreu.';

$txt['total_members'] = 'Membreux totais';
$txt['total_posts'] = 'Posts totais';
$txt['total_topics'] = 'Topici totais';

$txt['mins_logged_in'] = 'Míuts da restar estind anonçescu';

$txt['preview'] = 'Práivhischtă';
$txt['always_logged_in'] = 'Schemp restar estind anonçescu';

$txt['logged'] = 'Logescu';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'par';

$txt['hours'] = 'þorăs';
$txt['days_word'] = 'ziuăs';

$txt['newest_member'] = ', ár pü noveu membreu.';

$txt['search_for'] = 'Çerçar';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Azul.+¿Estetz-voi+aicì?';
$txt['aim_title'] = 'Mensaxheir Istind AOL';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'Mensaxheir ICQ';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'Mensaxheir MSN';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Mensaxheir Istind Yahoo';

$txt['maintain_mode_on'] = 'Sovenençetz-voi q\'acest tagoror c\'e in la \'Modă da mamtenençù\'.';

$txt['read'] = 'Lirat';
$txt['times'] = 'fäts';

$txt['forum_stats'] = 'Statistici del scumpart';
$txt['latest_member'] = 'Membreu pü recent';
$txt['total_cats'] = 'Laïnăs totais';
$txt['latest_post'] = 'Post pü recent';

$txt['you_have'] = 'Voi tenetz';
$txt['click'] = 'Clichetz';
$txt['here'] = 'aicì';
$txt['to_view'] = 'à risguardar-en.';

$txt['total_boards'] = 'Scumparts totais';

$txt['print_page'] = 'Printar páxhină';

$txt['valid_email'] = 'Acest fost estar ün adreçéu da telepost gültec\'h.';

$txt['geek'] = '¡¡Éu sint \'n geek!!';
$txt['info_center_title'] = '%1$s - Centreu d\'informaziun';

$txt['send_topic'] = 'Envoxhiar acest topic';

$txt['sendtopic_title'] = 'Envoxhiar el topic &quot;%1$s&quot; à\'iens amíc.';
$txt['sendtopic_sender_name'] = 'Voastră nómină';
$txt['sendtopic_sender_email'] = 'Voastra adreçéu da telepost';
$txt['sendtopic_receiver_name'] = 'Nómină del reçeiteir';
$txt['sendtopic_receiver_email'] = 'Adreçéu da telepost del reçeiteir';
$txt['sendtopic_comment'] = 'Axhuntar ün comentar';

$txt['allow_user_email'] = 'Permitar uçeirs àð envoxhiar-me dels teleposts';

$txt['check_all'] = 'Controlar toct';

// Use numeric entities in the below string.
$txt['database_error'] = 'Ärör da colectă dels datüns';
$txt['try_again'] = 'Atentetz-voi da nhouă, sch\'o voi piaça. Schi voi zevetz à\'ceastă peintaglhă d\'ärör, reportetz-voi l\'ärör à\'iens aðmistreir.'; 
$txt['file'] = 'Fischeir';
$txt['line'] = 'Lignhă';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF tent zestectat es atentat autumätsmint à reparar ün ärör in voastră colectă dels datüns. Schi voi restetz tischind dels problüms, eda restetz reçeitind acestilor teleposts, contactetz-voi voastra þost.';
$txt['database_error_versions'] = '<strong>Aviß:</strong> Ça sembla qe voastră colectă dels datüns <em>så\'star</em> resquira ün upgrade. Els fischeirs da voastra tagoror sint actüellmint sür la verziun %1$s, quand qe voastră colectă dels datüns isch sür la verziun %2$s. L\'ärör dasupra povadra pouçivalmint quarfar schi voi executetz la verziun la pü recent da upgrade.php.';
$txt['template_parse_error'] = '¡Ärör da scumpraziun dels modeis!';
$txt['template_parse_error_message'] = 'Ça sembla qe quálse\'cosă tent caßescu sür el tagoror in el süstem dels modeis. Acest ärör fostadra estar solămint tempurar, aglhorc revenetz-voi es riatentetz-voi, sch\'o voi piaça. Schi voi restetz vidar acest mensatx, contactetz-voi l\'aðmistreir, sch\'o voi piaça.<br /><br />Voi pevetz ocså atentar à <a href="javascript:location.reload();">fraschciantar această páxhină</a>.';
$txt['template_parse_error_details'] = 'Hi estev\'iens problüm quand qe si schciarxheva el model eda fischeir da glheþ <tt><strong>%1$s</strong></tt>. Sch\'o voi piaça, controletz-voi la sintaschă es riatentetz-voi - sovenençetz-voi qe pünts da quotaziun singuis (<tt>\'</tt>) sovint fossent estar escapats cün ünă asnaroă (<tt>\\</tt>). Per vidar dal informaziun d\'ärör pü specific da PHP, atentetz-voi à <a href="' . $boardurl . '%1$s">aceßar el fischeir direct</a>.<br /><br />Så\'star voi veletz atentar à <a href="javascript:location.reload();">fraschciantar această páxhină</a> eda <a href="' . $scripturl . '?theme=1">úçar la þemă da zesfatxă</a>.';

$txt['today'] = '<strong>Oxhi</strong> à ';
$txt['yesterday'] = '<strong>Ieiri</strong> à ';
$txt['new_poll'] = 'Noveu sondatx';
$txt['poll_question'] = 'Fragă';
$txt['poll_vote'] = 'Suotamestar votă';
$txt['poll_total_voters'] = 'Voteirs totais';
$txt['shortcuts'] = 'coarturealăs: preßetz-voi alt+s à suotamestar/postar eda alt+p à práivhischtar';
$txt['shortcuts_firefox'] = 'coarturealăs: preßetz-voi shift+alt+s à suotamestar/postar eda shift+alt+p à práivhischtar';
$txt['poll_results'] = 'Risguardar resultaes';
$txt['poll_lock'] = 'Feischar votaziun';
$txt['poll_unlock'] = 'Atcrivar votaziun';
$txt['poll_edit'] = 'Editar sondatx';
$txt['poll'] = 'Sondatx';
$txt['one_day'] = '1 ziuă';
$txt['one_week'] = '1 seifetziuă';
$txt['one_month'] = '1 mes';
$txt['forever'] = 'schemp';
$txt['quick_login_dec'] = 'Login cün codă da sámbånd, teßeră es lungatà da seßiun';
$txt['one_hour'] = '1 þoră';
$txt['moved'] = 'MOVESCU';
$txt['moved_why'] = 'Entretz-voi ünă ziscriuziun scurzniă över<br />perqet si mova acest topic, sch\'o voi piaça.';
$txt['board'] = 'Scumpart';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Topic glüificat';

$txt['delete'] = 'Zeletar';

$txt['your_pms'] = 'Voschtri mensatxen perziunais';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Statistici da phü]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Codă';
$txt['code_select'] = '[Selectar]';
$txt['quote_from'] = 'Quotar da';
$txt['quote'] = 'Quotar';

$txt['merge_to_topic_id'] = 'ID del topic entocat';
$txt['split'] = 'Ziviçar topic';
$txt['merge'] = 'Ügnhar topici';
$txt['subject_new_topic'] = 'Subxhect per noveu topic';
$txt['split_this_post'] = 'Solămint ziviçar acest post.';
$txt['split_after_and_this_post'] = 'Ziviçar topic osprei es comprís acest post.';
$txt['select_split_posts'] = 'Selectar posts à ziviçar.';
$txt['new_topic'] = 'Noveu topic';
$txt['split_successful'] = 'Topic ziviçat riuschladămint ainciün doua topici.';
$txt['origin_topic'] = 'Topic d\'urixhì';
$txt['please_select_split'] = 'Selectetz-voi quáisevois posts voi veletz ziviçar, sch\'o voi piaça.';
$txt['merge_successful'] = 'Topici ügnhats riuschladămint.';
$txt['new_merged_topic'] = 'Topici nouămint ügnhats';
$txt['topic_to_merge'] = 'Topic àð ügnhar';
$txt['target_board'] = 'Scumpart entocat';
$txt['target_topic'] = 'Topic entocat';
$txt['merge_confirm'] = 'Estetz-voi sigür qe voi veletz ügnhar';
$txt['with'] = 'cün';
$txt['merge_desc'] = 'Această funziun ügnharha els mensatxen da doua topici ainciün viens topic. Els mensatxen serent aireçats eftir el temp da postamaintsch. Aglhorc el post el pü frü postat serà el prüm mensatx del topic ügnhat.';

$txt['set_sticky'] = 'Glüificar topic';
$txt['set_nonsticky'] = 'Zisglüificar topic';
$txt['set_lock'] = 'Feischar topic';
$txt['set_unlock'] = 'Atcrivar topic';

$txt['search_advanced'] = 'Çerçă avançadă';

$txt['security_risk'] = 'RISCĂ DA SIGÜRITÀ MAXHOR:';
$txt['not_removed'] = 'Voi non tenetz removat ';
$txt['not_removed_extra'] ='%1$s c\'e\'n cumpair da %2$s qi non füt xhenerat par SMF. Si put aceßar-en direct es úçar-en à gagnhar l\'eintradă inauþorisadă à voastra tagoror. Voi fossent zeletar-en strax.';

$txt['cache_writable_head'] = 'Aviß d\'Espunziun';
$txt['cache_writable'] = 'La nac\'hveisă da cache non isch scriuaval - acest afectarha l\'espunziun da voastra tagoror averçéămint.';

$txt['page_created'] = 'Páxhină creadă in ';
$txt['seconds_with'] = ' secunds cün ';
$txt['queries'] = ' requestăs.';

$txt['report_to_mod_func'] = 'Uçetz-voi această funziun àð informar els admods es aðmistreirs d\'iens mensatx abusïu eda necorrémint postat. <br /><em> Trac\'hetz-voi sch\'o voi piaça qe voastra adreçéu da telepost serà revelat àls admods schi voi en uçetz.</em>';

$txt['online'] = 'Sürlignhă';
$txt['offline'] = 'Non sürlignhă';
$txt['pm_online'] = 'Mensatx perziunal (sürlignhă)';
$txt['pm_offline'] = 'Mensatx perziunal (non sürlignhă)';
$txt['status'] = 'Statüs';

$txt['go_up'] = 'Ir upp';
$txt['go_down'] = 'Ir under';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2017</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Nadaliçăs:';
$txt['events'] = 'Evints:';
$txt['birthdays_upcoming'] = 'Nadaliçăs arivinds:';
$txt['events_upcoming'] = 'Evints arivinds:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Mes:';
$txt['calendar_year'] = 'År:';
$txt['calendar_day'] = 'Ziuă:';
$txt['calendar_event_title'] = 'Titlă d\'evint';
$txt['calendar_event_options'] = 'Opziuns d\'evint';
$txt['calendar_post_in'] = 'Postar in:';
$txt['calendar_edit'] = 'Editar evint';
$txt['event_delete_confirm'] = '¿Zeletar acest evint?';
$txt['event_delete'] = '¿Zeletar evint';
$txt['calendar_post_event'] = 'Postar evint';
$txt['calendar'] = 'Calendriereu';
$txt['calendar_link'] = 'Linc à calendriereu';
$txt['calendar_upcoming'] = 'Calendriereu arivind';
$txt['calendar_today'] = 'Calendriereu d\'oxhi';
$txt['calendar_week'] = 'Seifetziuă';
$txt['calendar_week_title'] = 'Seifetziuă %1$d da %2$d';
$txt['calendar_numb_days'] = 'Númerul da ziuăs:';
$txt['calendar_how_edit'] = '¿come edita-si acestilor evints?';
$txt['calendar_link_event'] = 'Lincar evint à post:';
$txt['calendar_confirm_delete'] = '¿Estetz-voi sigür qe voi veletz zeletar acest evint?';
$txt['calendar_linked_events'] = 'Evints lincats';
$txt['calendar_click_all'] = 'clichetz-voi à vidar toct i %1$s';

$txt['moveTopic1'] = 'Postar ün topic d\'adversiun';
$txt['moveTopic2'] = 'Cambiar el subxhect del topic';
$txt['moveTopic3'] = 'Noveu subxhect';
$txt['moveTopic4'] = 'Cambiar el subxhect da toct i mensatxen';
$txt['move_topic_unapproved_js'] = '¡Aviß! Si adüc non tent aprovat acest topic.\\n\\nNon si recomenda qe voi createtz ün topic d\'aversiun salva qe voi intençetz aprovar el post strax osprei la movaziun.';

$txt['theme_template_error'] = 'Incapaval à schciarxhar el model  \'%1$s\'.';
$txt['theme_language_error'] = 'Incapaval à schciarxhar el fischeir da glheþ \'%1$s\'.';

$txt['parent_boards'] = 'Tagorors d\'infint';

$txt['smtp_no_connect'] = 'Non pognheva conectar àl þost SMTP';
$txt['smtp_port_ssl'] = 'Setatx da port SMTP necorrè; ça fost estar 465 per els serveirs  SSL.';
$txt['smtp_bad_response'] = 'Non pognheva reçeitar codăs da respuns da serveir da telepost';
$txt['smtp_error'] = 'Encuntreva problüms quand qe envoxhieva telepost. Ärör: ';
$txt['mail_send_unable'] = 'Incapaval àð envoxhiar telepost àl adreçéu da telepost \'%1$s\'';

$txt['mlist_search'] = 'Çerçar membreux';
$txt['mlist_search_again'] = 'Çerçar da nhouă';
$txt['mlist_search_email'] = 'Çerçar par adreçéu da telepost';
$txt['mlist_search_messenger'] = 'Çerçar par tancuft da mensaxheir';
$txt['mlist_search_group'] = 'Çerçar par posiziun';
$txt['mlist_search_name'] = 'Çerçar par nómină';
$txt['mlist_search_website'] = 'Çerçar par siteu WWW';
$txt['mlist_search_results'] = 'Çerçar resultaes per';
$txt['mlist_search_by'] = 'Çerçar par %1$s';
$txt['mlist_menu_view'] = 'Risguardar el list da membreux';

$txt['attach_downloaded'] = 'transreçaifescu';
$txt['attach_viewed'] = 'risguardescu';
$txt['attach_times'] = 'fäts';

$txt['settings'] = 'Setatxen';
$txt['never'] = 'Txamais';
$txt['more'] = 'pü';

$txt['hostname'] = 'Nómină da þost';
$txt['you_are_post_banned'] = 'Apoloxhaes %1$s, voi estetz xhexhünescu da postar es envoxhiar dels mensatxen perziunais sür acest tagoror.';
$txt['ban_reason'] = 'Raziun';

$txt['tables_optimized'] = 'Tableux da colectă dels datüns optimiçats';

$txt['add_poll'] = 'Axhuntar sondatx';
$txt['poll_options6'] = 'Voi pevetz selectar solămint txusca %1$s opziuns.';
$txt['poll_remove'] = 'Removar sondatx';
$txt['poll_remove_warn'] = '¿Estetz-voi sigür qe voi veletz removar acest sondatx del topic?';
$txt['poll_results_expire'] = 'Las resultaes serent mostradăs quand qe la votaziun tent terminat';
$txt['poll_expires_on'] = 'Votaziun termina';
$txt['poll_expired_on'] = 'Votaziun termineva';
$txt['poll_change_vote'] = 'Removar votă';
$txt['poll_return_vote'] = 'Opziuns da votar';
$txt['poll_cannot_see'] = 'Voi non pevetz vidar las resultaes d\'acest sondatx actüellmint.';

$txt['quick_mod_approve'] = 'Aprovar selectats';
$txt['quick_mod_remove'] = 'Removar selectats';
$txt['quick_mod_lock'] = 'Feischar/atcrivar selectats';
$txt['quick_mod_sticky'] = 'Glüificar/zisglüificar selectats';
$txt['quick_mod_move'] = 'Movar selectats à';
$txt['quick_mod_merge'] = 'Ügnhar selectats';
$txt['quick_mod_markread'] = 'Marcar selectats come lirats';
$txt['quick_mod_go'] = 'Va!';
$txt['quickmod_confirm'] = '¿Estetz-voi sigür qe voi veletz façar acest?';

$txt['spell_check'] = 'Controlar speliçaziun';

$txt['quick_reply'] = 'Contestă laintă';
$txt['quick_reply_desc'] = 'Cün ünă <em>contestă laintă</em> voi pevetz scríuar ün post quand qe voi risguardetz ün topic sanc schciarxhar ünă nouă páxhină. Voi restetz povind úçar la codă BBS es dels emoticons come voi en façadretz in ün post normal.';
$txt['quick_reply_warning'] = 'Aviß: ¡acest topic isch actüellmint feischat! Solămint dels aðmistreirs es admods povent rezirar.';
$txt['quick_reply_verification'] = 'Osprei qe voi suotamestetz voastra post, voi seretz zirectescu àl páxhină da postaziun normal à controlar voastra post %1$s.';
$txt['quick_reply_verification_guests'] = '(resquirat per toct i gästs)';
$txt['quick_reply_verification_posts'] = '(resquirat per toct i uçeirs cün mïus qe %1$d posts)';
$txt['wait_for_approval'] = 'Aviß: acest post non serà zesplegat txusca qe ça tent estescu aprovat par ün admod.';

$txt['notification_enable_board'] = '¿Estetz-voi sigür qe voi veletz endünamar l\'avisaziun dels noveux topici per acest tagoror?';
$txt['notification_disable_board'] = '¿Estetz-voi sigür qe voi veletz zisendünamar l\'avisaziun dels noveux topici per acest tagoror?';
$txt['notification_enable_topic'] = '¿Estetz-voi sigür qe voi veletz endünamar l\'avisaziun dals nouăs contestăs per acest tagoror?';
$txt['notification_disable_topic'] = '¿Estetz-voi sigür qe voi veletz zisendünamar l\'avisaziun dals nouăs contestăs per acest tagoror?';

$txt['report_to_mod'] = 'Reportar àð admod';
$txt['issue_warning_post'] = 'Emestar ün aviß à c\'hauçă d\'acest mensatx';

$txt['unread_topics_visit'] = 'Topici non lirat recents';
$txt['unread_topics_visit_none'] = 'Non si troveva aucün topici non lirats zespäts voastra visitaziun pü recent. <a href="' . $scripturl . '?action=unread;all">Clichetz aicì àð atentar toct i topici non lirats</a>.';
$txt['unread_topics_all'] = 'Toct i topici non lirats';
$txt['unread_replies'] = 'Topici inovats';

$txt['who_title'] = 'Qi\'st sürlignhă';
$txt['who_and'] = ' es ';
$txt['who_viewing_topic'] = ' risguardent acest topic.';
$txt['who_viewing_board'] = ' risguardent acest scumpart.';
$txt['who_member'] = 'Membreu';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS!';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Gäst';
$txt['guests'] = 'Gästs';
$txt['user'] = 'Uçeir';
$txt['users'] = 'Uçeirs';
$txt['hidden'] = 'Ascuns';
$txt['buddy'] = 'C\'haveir';
$txt['buddies'] = 'C\'haveirs';
$txt['most_online_ever'] = 'Pü sürlignhă zespäts schemp';
$txt['most_online_today'] = 'Pü sürlignhă oxhi';

$txt['merge_select_target_board'] = 'Selectetz-voi el scumpart entocat del topic ügnhat';
$txt['merge_select_poll'] = 'Selectetz-voi qétsevol sondatx el topic ügnhat fostadra tir';
$txt['merge_topic_list'] = 'Selectetz-voi topici àð ügnhar';
$txt['merge_select_subject'] = 'Selectetz-voi subxhect da topic ügnhat';
$txt['merge_custom_subject'] = 'Subxhect perziunaliçat';
$txt['merge_enforce_subject'] = 'Change the subject of all the messages';
$txt['merge_include_notifications'] = '¿Includar avisaziuns?';
$txt['merge_check'] = '¿Ügnhar?';
$txt['merge_no_poll'] = 'Aucün sondatx';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Eicon corentic';
$txt['message_icon'] = 'Eicon da mensatx';

$txt['smileys_current'] = 'Partidă d\'emoticons corentic';
$txt['smileys_none'] = 'Aucün emoticons';
$txt['smileys_forum_board_default'] = 'Zesfatxă da tagoror/scumpart';

$txt['search_results'] = 'Resultaes dal çerçă';
$txt['search_no_results'] = 'Apoloxhaes, aucün cópuis füvent trovats';

$txt['totalTimeLogged1'] = 'Lungatà total dal seßiun: ';
$txt['totalTimeLogged2'] = ' ziuăs, ';
$txt['totalTimeLogged3'] = ' þoras es ';
$txt['totalTimeLogged4'] = ' míuts.';
$txt['totalTimeLogged5'] = 'z ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Ja';
$txt['approve_thereare'] = 'J\'ont';
$txt['approve_member'] = 'viens membreu, qi aschtepta';
$txt['approve_members'] = 'membreux, qi aschteptent';
$txt['approve_members_waiting'] = 'l\'approval.';

$txt['notifyboard_turnon'] = '¿Veletz-voi ün telepost d\'avisaziun quand qe quálseviens posta ün noveu topic in acest scumpart?';
$txt['notifyboard_turnoff'] = '¿Estetz-voi sigür qe voi non veletz reçeitar dels avisaziuns da noveux topici per acest scumpart?';

$txt['activate_code'] = 'Voastră codă d\'activaziun isch:';

$txt['find_members'] = 'Trovar membreux';
$txt['find_username'] = 'Nómină, codă da sámbånd, eda adreçéu da telepost';
$txt['find_buddies'] = '¿Solămint mostrar c\'haveirs?';
$txt['find_wildcards'] = 'Metacaractréux permitats:: *, ?';
$txt['find_no_results'] = 'Aucün resultaes trovadăs';
$txt['find_results'] = 'Resultaes';
$txt['find_close'] = 'Fermar';

$txt['unread_since_visit'] = 'Mostrar posts non lirats zespäts visitaziun pü recent.';
$txt['show_unread_replies'] = 'Mostrar nouăs contestăs à voschtri posts.';

$txt['change_color'] = 'Cambiar colour';

$txt['quickmod_delete_selected'] = 'Removar selecteschti';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Voi tenetz reçeitat viens eda pü noveux mensatxen perziunais.\\n¿Veladretz-voi åpnar ünă nouă fenestră à risguardar-en?';

$txt['previous_next_back'] = '&laquo; previös';
$txt['previous_next_forward'] = 'próxim &raquo;';

$txt['movetopic_auto_board'] = '[SCUMPART]';
$txt['movetopic_auto_topic'] = '[LINC À TOPIC]';
$txt['movetopic_default'] = 'Si tent movescu acest topic à ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Restreçar eda expançar l\'entestă.';

$txt['mark_unread'] = 'Marcar non lirats';

$txt['ssi_not_direct'] = 'Sch\'o voi piaça, non aceßetz-voi SSI.php direct över URL; voi så’star veletz úçar el paþeu (%1$s) eda axhunara ?ssi_function=quálse\'cosă.';
$txt['ssi_session_broken'] = '¡SSi.php non pognheva schciarxhar ünă seßiun! Ça put-estar cauça dels problüms cün el logut es altrăs funziuns - sch\'o voi piaça, ¡sigüretz-voi qe SSI.php isch includat avant *ingenc'hosă* d\'alter in toct da voschtri scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Práivhischtar post';
$txt['preview_fetch'] = 'Naudind práivhischtă...';
$txt['preview_new'] = 'Noveu mensatx';
$txt['error_while_submitting'] = 'Si encuntreva el(s) ärör(s) sovind(s) quand qe si posteva acest mensatx::';
$txt['error_old_topic'] = 'Aviß: Neviens non tent postat in acest topic per à mhïus %1$d ziuăs.<br />Salva qe voi estetz sigür qe voi veletz rezirar, consideretz-voi començar ün noveu topic, sch\'o voi piaça..';

$txt['split_selected_posts'] = 'Posts selectats';
$txt['split_selected_posts_desc'] = 'Els posts d\'under formarha ün noveu topic osprei la ziviçaziun.';
$txt['split_reset_selection'] = 'reseþar seleziun';

$txt['modify_cancel'] = 'Niþiliçar';
$txt['mark_read_short'] = 'Marcar lirats';

$txt['pm_short'] = 'Vaes mensatxen';
$txt['pm_menu_read'] = 'Lirar voschtri mensatxen';
$txt['pm_menu_send'] = 'Envoxhiar ün mensatx';

$txt['hello_member_ndt'] = 'Azul';

$txt['unapproved_posts'] = 'Posts non aprovats (topici: %1$d, posts: %2$d)';

$txt['ajax_in_progress'] = 'Schciarxhind...';

$txt['mod_reports_waiting'] = 'J\'ont actüellmint %1$d reports d\'admod åpnats.';

$txt['view_unread_category'] = 'Posts non lirats';
$txt['verification'] = 'Reprovaziun';
$txt['visual_verification_description'] = 'Taipetz-voi las letrăs qi sint mostradăs in el pictür';
$txt['visual_verification_sound'] = 'Auscultetz-voi àls letrăs';
$txt['visual_verification_request_new'] = 'Requestar ün altreu pictür';

// Sub menu labels
$txt['summary'] = 'Resümadă';
$txt['account'] = 'Setatxen d\'acaunteu';
$txt['forumprofile'] = 'Profil da tagoror';

$txt['modSettings_title'] = 'Featürăs es opziuns';
$txt['package'] = 'Acurat da pacatx';
$txt['errlog'] = 'Log d\'ärör';
$txt['edit_permissions'] = 'Permiçais';
$txt['mc_unapproved_attachments'] = 'Estacadăs non aprovadăs';
$txt['mc_unapproved_poststopics'] = 'Posts es topici non aprovats';
$txt['mc_reported_posts'] = 'Posts reportats';
$txt['modlog_view'] = 'Log da moderaziun';
$txt['calendar_menu'] = 'Risguardar calendriereu';

//!!! Send email strings - should move?
$txt['send_email'] = 'Envoxhiar telepost';
$txt['send_email_disclosed'] = 'Trac\'hetz-voi q\'acest serà vidaval àl reçeiteir.';
$txt['send_email_subject'] = 'Subxhect da telepost';

$txt['ignoring_user'] = 'Voi ignhoretz acest uçeir.';
$txt['show_ignore_user_post'] = 'Mostra-me el post.';

$txt['spider'] = 'Aragnhă';
$txt['spiders'] = 'Aragnhăs';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Transreçaifadăs';
$txt['filesize'] = 'Grülteçă da fischeir';
$txt['subscribe_webslice'] = 'Subscríuar à Webslice';

// Restore topic
$txt['restore_topic'] = 'Restorniar topic';
$txt['restore_message'] = 'Restorniar';
$txt['quick_mod_restore'] = 'Restorniar selectats';

// Editor prompt.
$txt['prompt_text_email'] = 'Entretz-voi l\'adreçéu da telepost, sch\'o voi piaça.';
$txt['prompt_text_ftp'] = 'Entretz-voi l\'adreçéu da ftp, sch\'o voi piaça.';
$txt['prompt_text_url'] = 'Entretz-voi l\'URL à qet voi veletz lincar, sch\'o voi piaça.';
$txt['prompt_text_img'] = 'Entrar locaziun d\'imatx';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Zeletar item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Modeis: ';
$txt['debug_subtemplates'] = 'Submodeis: ';
$txt['debug_language_files'] = 'Fischeirs da glheþ: ';
$txt['debug_stylesheets'] = 'Lençois da stil: ';
$txt['debug_files_included'] = 'Fischeirs includats: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'risguardar';
$txt['debug_cache_hits'] = 'Cache hits: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s octets';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss per %2$s octets';
$txt['debug_queries_used'] = 'Requestăs uçadăs: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Requestăs uçadăs: %1$d, %2$d avißen.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> lignhă <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'qi preindeva %1$s secunds.';
$txt['debug_query_which_took_at'] = 'qi preindeva %1$s secunds à %2$s ainciün requestă.';
$txt['debug_show_queries'] = '[Mostrar requestăs]';
$txt['debug_hide_queries'] = '[Ascunçar requestăs]';

?>
