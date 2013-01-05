<?php 

	$russian = array(
	
		// general
		'group_tools:decline' => "Отказать",
		'group_tools:revoke' => "Отозвать",
		'group_tools:add_users' => "Добавить пользователей",
		'group_tools:in' => "в",
		'group_tools:remove' => "Удалить",
		'group_tools:clear_selection' => "Очистить выделение",
		'group_tools:all_members' => "Все участники",
		'group_tools:explain' => "Объяснение",
		
		'group_tools:default:access:group' => "Только для участников группы",
		
		'group_tools:joinrequest:already' => "Отозвать запрос на участие",
		'group_tools:joinrequest:already:tooltip' => "Вы уже отправили запрос на участие, нажмите здесь, чтобы отозвать запрос",
		
		// menu
		'group_tools:menu:mail' => "Сообщение участникам",
		'group_tools:menu:invitations' => "Управление приглашениями",
		
		// plugin settings
		'group_tools:settings:invite:title' => "Опции приглашения в группу", // "Group invitation options",
		'group_tools:settings:management:title' => "Общие опции группы", //  "General group options",
		'group_tools:settings:default_access:title' => "Доступ группы по умолчанию", //  "Default group access",
	
		'group_tools:settings:admin_create' => "Разрешить создание групп только администраторам сайта", //  "Limit the creation of groups to Site administrators",
		'group_tools:settings:admin_create:description' => "Установка этого поля в 'Да' сделает создание новой группы невозможным для обычного пользователя вашего сайта", //  "Setting this to 'Yes' will make the creation of a new group impossible for a normal user of your site.",
		
		'group_tools:settings:admin_transfer' => "Разрешить смену владельца группы", //  "Allow group owner transfer",
		'group_tools:settings:admin_transfer:admin' => "Только администраторам сайта", //  "Site admin only",
		'group_tools:settings:admin_transfer:owner' => "Владельцам группы и администраторам сайта", //  "Group owners and site admins",
		
		'group_tools:settings:multiple_admin' => "Разрешить несколько администраторов группы", //  "Allow multiple group admins",
		
		'group_tools:settings:invite' => "Разрешить приглашать всех пользователей (не только друзей)", //  "Allow all users to be invited (not just friends)",
		'group_tools:settings:invite_email' => "Разрешить приглашать всех пользователей по e-mail", //  "Allow all users to be invited by e-mail address",
		'group_tools:settings:invite_csv' => "Разрешить приглашать всех пользователей с помощью CSV-файла", //  "Allow all users to be invited by CSV-file",
	
		'group_tools:settings:mail' => "Разрешить рассылку группы (разрешает владельцам группы отправлять сообщение всем участникам группы)", //  "Allow group mail (allows group admins to send a message to all members)",
		
		'group_tools:settings:listing' => "Закладка списка группы по умолчанию", //  "Default group listing tab",
		
		'group_tools:settings:default_access' => "Каким должен быть доступ по умолчанию к содержимому в группах этого сайта", //  "What should be the default access for content in the groups of this site",
		'group_tools:settings:default_access:disclaimer' => "<b>DISCLAIMER:</b> это не будет работать, пока к вашей инсталляции Elgg не будет применен <a href='https://github.com/Elgg/Elgg/pull/253' target='_blank'>https://github.com/Elgg/Elgg/pull/253</a> ", //  "<b>DISCLAIMER:</b> this will not work unless you have <a href='https://github.com/Elgg/Elgg/pull/253' target='_blank'>https://github.com/Elgg/Elgg/pull/253</a> applied to your Elgg installation.",
		
		'group_tools:settings:search_index' => "Разрешить поисковикам индексировать закрытые группы", //  "Allow closed groups to be indexed by search engines",
		'group_tools:settings:auto_notification' => "Автоматически включать уведомления группы для присоединяющихся", //  "Automatically enable group notification on group join",
		'group_tools:settings:auto_join' => "Автоматически присоединять новых пользователей к группам", //  "Auto join groups",
		'group_tools:settings:auto_join:description' => "Новые пользователя будут автоматически присоединяться к следующим группам", //  "New users will automaticly join the following groups",
		
		// group invite message
		'group_tools:groups:invite:body' => "Привет %s,

%s пригласил вас присоединиться к группе '%s'. 
%s

Нажмите ниже чтобы посмотреть свои приглашения:
%s",
	
		// group add message
		'group_tools:groups:invite:add:subject' => "Вас добавили к группе  %s", //  "You've been added to the group %s",
		'group_tools:groups:invite:add:body' => "Привет %s,
	
%s добавил вас в группу %s. 
%s

Чтобы посмотреть группу, нажмите на ссылке:
%s",

		// group invite by email
		'group_tools:groups:invite:email:subject' => "Вас пригласили в группу %s", //  "You've been invited for the group %s",
		'group_tools:groups:invite:email:body' => "Привет,
		
%s пригласил вас присоединиться к группе %s на %s.
%s

Если у вас нет аккаунта на %s, пожалуйста, зарегистрируйтесь здесь:
%s

Если у вас уже есть аккаунт или вы только что зарегистрировались, пожалуйста, нажмите следующую ссылку, чтобы принять приглашение:
%s

Вы также можете выбрать Все группы сайта -> Приглашения групп и ввести следующий код:
%s",

		// group transfer notification
		'group_tools:notify:transfer:subject' => "Администрирование группы %s перешло к вам", //  "Administration of the group %s has been appointed to you",
		'group_tools:notify:transfer:message' => "Привет %s,
		
%s указал вас как нового администратора группы %s. 

Чтобы посетить группу, пожалуйста, нажмите на следующей ссылке:
%s",
		
		// group edit tabbed
		'group_tools:group:edit:profile' => "Профиль/инструменты группы", //  "Group profile / tools",
		'group_tools:group:edit:other' => "Другие опции", //  "Other options",

		// admin transfer - form
		'group_tools:admin_transfer:title' => "Передать владение этой группой", //  "Transfer the ownership of this group",
		'group_tools:admin_transfer:transfer' => "Передать владение группой", //  "Transfer group ownership to",
		'group_tools:admin_transfer:myself' => "Мне", //  "Myself",
		'group_tools:admin_transfer:submit' => "Передать", //  "Tranfser",
		'group_tools:admin_transfer:no_users' => "Нет участников группы или друзей, чтобы передать владение группой.", //  "No members or friends to transfer ownership to.",
		'group_tools:admin_transfer:confirm' => "Вы уверены, что хотите передать владение?", //  "Are you sure you wish to transfer ownership?",
		
		// auto join form
		'group_tools:auto_join:title' => "Опции автоматического присоединения", //  "Auto join options",
		'group_tools:auto_join:add' => "%sДобавить эту группу%s к автоматически присоединяемым группам. Это значит, что новые пользователи автоматически присоединяются к этой группе при регистрации.", //  "%sAdd this group%s to the auto join groups. This will mean that new users are automaticly added to this group on registration.",
		'group_tools:auto_join:remove' => "%sУдалить эту группу%s из групп, присоединяемых автоматически. Это значит, что новые пользователи не будут автоматически присоединяться к этой группе при регистрации.", //  "%sRemove this group%s from the auto join groups. This will mean that new users will no longer automaticly join this group on registration.",
		'group_tools:auto_join:fix' => "Чтобы сделать всех пользователей сайта участниками этой группы, пожалуйста, %sнажмите здесь%s.", //  "To make all site members a member of this group, please %sclick here%s.",
		
		// group admins
		'group_tools:multiple_admin:group_admins' => "Администраторы группы",
		'group_tools:multiple_admin:profile_actions:remove' => "Удалить из администраторов группы", //  "Remove group admin",
		'group_tools:multiple_admin:profile_actions:add' => "Сделать администратором группы", //  "Add group admin",
	
		'group_tools:multiple_admin:group_tool_option' => "Разрешить администраторам группы назначать других администраторов группы", //  "Enable group admins to assign other group admins",

		// cleanup options
		'group_tools:cleanup:title' => "Очистка боковой вкладки группы", //  "Group sidebar cleanup",
		'group_tools:cleanup:description' => "Очистить боковую вкладку группы. Это не будет влиять на администраторов группы.", //  "Cleanup the sidebar of the group. This will have no effect for the group admins.",
		'group_tools:cleanup:owner_block' => "Ограничить блок владельцев", //  "Limit the owner block",
		'group_tools:cleanup:owner_block:explain' => "Блок владельцев находится вверху боковой вкладки, в этой области могут также располагаться некоторые ссылки (например, RSS-ссылки).", //  "The owner block can be found at the top of the sidebar, some extra links can be posted in this area (example: RSS links).",
		'group_tools:cleanup:actions' => "Запретить пользователям присоединяться к этой группе самостоятельно?", //  "Do you want to disallow users to join this group",
		'group_tools:cleanup:actions:explain' => "В зависимости от настроек группы пользователи могут напрямую присоединяться к группе или просить разрешение на присоединение.", //  "Depending on your group setting, users can directly join the group or request membership.",
		'group_tools:cleanup:menu' => "Скрыть пункты бокового меню", //  "Hide side menu items",
		'group_tools:cleanup:menu:explain' => "Скрыть ссылки меню на разные инструменты группы. Пользователи будут иметь доступ только к инструментам группы с помощью виджетов группы.", //  "Hide the menu links to the different group tools. The users will only be able to get access to the group tools by using the group widgets.",
		'group_tools:cleanup:members' => "Скрыть участников группы", //  "Hide the group members",
		'group_tools:cleanup:members:explain' => "На странице профиля группы в подсвеченной секции находится список участников группы. Вы можете скрыть этот список.", //  "On the group profile page a list of the group members can be found at the highlighted section. You can choose to hide this list.",
		'group_tools:cleanup:search' => "Скрыть поиск в группе", //  "Hide the search in group",
		'group_tools:cleanup:search:explain' => "На странице профиля группы есть элемент для поиска. Вы можете скрыть этот элемент.", //  "On the group profile page a search box is available. You can choose to hide this.",
		'group_tools:cleanup:featured' => "Показывать популярные группы на боковой вкладке", //  "Show featured groups in the sidebar",
		'group_tools:cleanup:featured:explain' => "Вы можете показывать список популярных групп в выделенной секции на странице профиля группы.", //  "You can choose to show a list of featured groups at the highlighted section on the group profile page",
		'group_tools:cleanup:featured_sorting' => "Как сортировать популярные группы", //  "How to sort featured groups",
		'group_tools:cleanup:featured_sorting:time_created' => "Сначала новые", //  "Newest first",
		'group_tools:cleanup:featured_sorting:alphabetical' => "По алфавиту", //  "Alphabetical",

		// group default access
		'group_tools:default_access:title' => "Уровень доступа по умолчанию к содержимому группы", //  "Group default access",
		'group_tools:default_access:description' => "Здесь вы контролируете, каким должен быть доступ по умолчанию к новому контенту в вашей группе.", //  "Here you can control what the default access of new content in your group should be.",
		
		// group notification
		'group_tools:notifications:title' => "Уведомления группы", //  "Group notifications",
		'group_tools:notifications:description' => "Эта группа состоит из %s участников, %s из которых подписались на уведомления об активности в этой группе. Ниже вы можете изменить это для всех участников группы.", //  "This group has %s members, of those %s have enabled notifications on activity in this group. Below you can change this for all users of the group.",
		'group_tools:notifications:disclaimer' => "Если группа большая, это может занять некоторое время.", //  "With large groups this could take a while.",
		'group_tools:notifications:enable' => "Включить уведомления для всех", //  "Enable notifications for everyone",
		'group_tools:notifications:disable' => "Выключить уведомления для всех", //  "Disable notifications for everyone",
		
		// group profile widgets
		'group_tools:profile_widgets:title' => "Показывать виджеты профиля группы не участвующим в группе", //  "Show group profile widgets to non members",
		'group_tools:profile_widgets:description' => "Это закрытая группа. По умолчанию не участвующим в группе виджеты не показываются. Здесь вы можете это изменить.", //  "This is a closed group. Default no widgets are shown to non members. Here you can configure if you whish to change that.",
		'group_tools:profile_widgets:option' => "Разрешить не участвующим в группе видеть виджеты на странице профиля группы:", //  "Allow non members to view widgets on the group profile page:",
		
		// group mail
		'group_tools:mail:message:from' => "Из группы", //  "From group",
		
		'group_tools:mail:title' => "Послать письмо участникам группы", //  "Send a mail to the group members",
		'group_tools:mail:form:recipients' => "Количество получателей", //  "Number of recipients",
		'group_tools:mail:form:members:selection' => "Выберите индивидуальных участников", //  "Select individual members",
		
		'group_tools:mail:form:title' => "Тема", //  "Subject",
		'group_tools:mail:form:description' => "Сообщение", //  "Body",
	
		'group_tools:mail:form:js:members' => "Пожалуйста, выберите как минимум одного адресата", //  "Please select at least one member to send the message to",
		'group_tools:mail:form:js:description' => "Пожалуйста, введите сообщение", //  "Please enter a message",
		
		// group invite
		'group_tools:groups:invite:title' => "Пригласить пользователей в эту группу",
		'group_tools:groups:invite' => "Пригласить пользователей",
		
		'group_tools:group:invite:friends:select_all' => "Выделить всех друзей", //  "Select all friends",
		'group_tools:group:invite:friends:deselect_all' => "Снять выделение всех друзей", //  "Deselect all friends",
		
		'group_tools:group:invite:users' => "Найти пользователя (-ей)", //  "Find user(s)",
		'group_tools:group:invite:users:description' => "Введите имя или логин пользователя сайта и выберите его/ее из списка", //  "Enter a name or username of a site member and select him/her from the list",
		'group_tools:group:invite:users:all' => "Пригласить всех пользователей сайта в эту группу", //  "Invite all site members to this group",
		
		'group_tools:group:invite:email' => "Используя e-mail адрес", //  "Using e-mail address",
		'group_tools:group:invite:email:description' => "Введите e-mail адрес и выберите его/ее из списка", //  "Enter a valid e-mail address and select it from the list",
		
		'group_tools:group:invite:csv' => "Используя данные из CSV", //  "Using CSV upload",
		'group_tools:group:invite:csv:description' => "Вы можете загрузить CSV-файл с данными о пользователях, которых хотите пригласить. <br />Формат данных должен быть такой: displayname;e-mail address. В файле не должно быть заголовочной строки.", //  "You can upload a CSV file with users to invite.<br />The format must be: displayname;e-mail address. There shouldn't be a header line.",
		
		'group_tools:group:invite:text' => "Личное замечание (необязательно)", //  "Personal note (optional)",
		'group_tools:group:invite:add:confirm' => "Вы уверены, что хотите добавить этих пользователей напрямую?", //  "Are you sure you wish to add these users directly?",
		
		'group_tools:group:invite:resend' => "Послать заново приглашение тем пользователям, которые уже были приглашены", //  "Resend invitations to users who already have been invited",

		'group_tools:groups:invitation:code:title' => "Приглашение в группу по e-mail", //  "Group invitation by e-mail",
		'group_tools:groups:invitation:code:description' => "Если вы получили приглашение присоединиться к группе по e-mail, то здесь вы можете набрать код приглашения, чтобы его принять. Если вы нажмете на ссылке в тексте приглашения, этот код будет введен за вас.", //  "If you have received an invitation to join a group by e-mail, you can enter the invitation code here to accept the invitation. If you click on the link in the invitation e-mail the code will be entered for you.",
	
		// group membership requests
		'group_tools:groups:membershipreq:requests' => "Запросы на участие", //  "Membership requests",
		'group_tools:groups:membershipreq:invitations' => "Непринятые приглашения", //  "Outstanding invitations",
		'group_tools:groups:membershipreq:invitations:none' => "Нет непринятых приглашений", //  "No outstanding invitations",
		'group_tools:groups:membershipreq:invitations:revoke:confirm' => "Вы уверены, что хотите отменить приглашение", //  "Are you sure you wish to revoke this invitation",
	
		// group invitations
		'group_tools:group:invitations:request' => "Нерассмотренные запросы на участие", //  "Outstanding membership requests",
		'group_tools:group:invitations:request:revoke:confirm' => "Вы уверены, что хотите отменить запрос на участие", //  "Are you sure you wish to revoke your membership request?",
		'group_tools:group:invitations:request:non_found' => "В текущее время нет нерассмотренных запросов на участие", //  "There are no outstanding membership requests at this time",
	
		// group listing
		'group_tools:groups:sorting:alphabetical' => "По алфавиту", //  "Alphabetical",
		'group_tools:groups:sorting:open' => "Открытый", //  "Open",
		'group_tools:groups:sorting:closed' => "Закрытый", //  "Closed",
	
		// actions
		'group_tools:action:error:input' => "Неверный ввод для этой операции", //  "Invalid input to perform this action",
		'group_tools:action:error:entities' => "Указанные GUIDы не соответствуют объектам", //  "The given GUIDs didn't result in the correct entities",
		'group_tools:action:error:entity' => "Указанный GUID не соответствует объекту", //  "The given GUID didn't result in a correct entity",
		'group_tools:action:error:edit' => "У вас нет доступа к данному объекту", //  "You don't have access to the given entity",
		'group_tools:action:error:save' => "При сохранении настроек произошла ошибка", //  "There was an error while saving the settings",
		'group_tools:action:success' => "Настройки сохранены успешно", //  "The settings where saved successfully",
	
		// admin transfer - action
		'group_tools:action:admin_transfer:error:access' => "У вас нет полномочий передать владение группой", //  "You're not allowed to transfer ownership of this group",
		'group_tools:action:admin_transfer:error:self' => "Вы не можете передать группу самому себе, вы уже владелец", //  "You can't transfer onwership to yourself, you're already the owner",
		'group_tools:action:admin_transfer:error:save' => "Произошла неизвестная ошибка при сохранении группы. Пожалуйста, повторите еще раз", //  "An unknown error occured while saving the group, please try again",
		'group_tools:action:admin_transfer:success' => "Владение группой было успешно передано %s", //  "Group ownership was successfully transfered to %s",
		
		// group admins - action
		'group_tools:action:toggle_admin:error:group' => "Неверные данные группы, либо вы не можете редактировать эту группу, либо пользователь не входит в группу.", //  "The given input doesn't result in a group or you can't edit this group or the user is not a member",
		'group_tools:action:toggle_admin:error:remove' => "При удалении прав администратора группы произошла неизвестная ошибка", //  "An unknown error occured while removing the user as a group admin",
		'group_tools:action:toggle_admin:error:add' => "При добавлении прав администратора группы произошла неизвестная ошибка", //  "An unknown error occured while adding the user as a group admin",
		'group_tools:action:toggle_admin:success:remove' => "Пользователь был успешно удален из администраторов группы", //  "The user was successfully removed as a group admin",
		'group_tools:action:toggle_admin:success:add' => "Пользователь был успешно добавлен в администраторы группы", //  "The user was successfully added as a group admin",
		
		// group mail - action
		'group_tools:action:mail:success' => "Сообщение послано успешно", //  "Message succesfully send",
	
		// group - invite - action
		'group_tools:action:invite:error:invite'=> "Ни одного пользователя не было приглашено (%s уже приглашены, %s уже являются участниками)", //  "No users were invited (%s already invited, %s already a member)",
		'group_tools:action:invite:error:add'=> "Ни одного пользователя не было добавлено (%s уже приглашены, %s уже являются участниками)", //  "No users were invited (%s already invited, %s already a member)",
		'group_tools:action:invite:success:invite'=> "Успешно приглашено %s пользователей (%s уже приглашены, а %s уже являются участниками)", //  "Successfully invited %s users (%s already invited and %s already a member)",
		'group_tools:action:invite:success:add'=> "Успешно добавлено %s пользователей (%s уже приглашены, а %s уже являются участниками)", //  "Successfully added %s users (%s already invited and %s already a member)",
		
		// group - invite - accept e-mail
		'group_tools:action:groups:email_invitation:error:input' => "Пожалуйста, введите код приглашения", //  "Please enter an invitation code",
		'group_tools:action:groups:email_invitation:error:code' => "Введенный код недействителен", //  "The entered invitation code is no longer valid",
		'group_tools:action:groups:email_invitation:error:join' => "Произошла неизвестная ошибка при присоединении к группе, возможно, вы уже входите в группу", //  "An unknown error occured while joining the group %s, maybe you're already a member",
		'group_tools:action:groups:email_invitation:success' => "Вы успешно присоединились к группе", //  "You've successfully joined the group",
		
		// group toggle auto join
		'group_tools:action:toggle_auto_join:error:save' => "При сохранении новых настроек произошла ошибка", //  "An error occured while saving the new settings",
		'group_tools:action:toggle_auto_join:success' => "Новые настройки сохранены успешно", //  "The new settings were saved successfully",
		
		// group fix auto_join
		'group_tools:action:fix_auto_join:success' => "Участие в группе зафиксировано: %s новых участников, %s уже были участниками, %s ошибок", //  "Group membership fixed: %s new members, %s were already a member and %s failures",
		
		// group cleanup
		'group_tools:actions:cleanup:success' => "Настройки успешно сохранены", //  "The cleanup settings were saved successfully",
		
		// group default access
		'group_tools:actions:default_access:success' => "Уровень доступа по умолчанию к объектам группы успешно сохранён", //  "The default access for the group was saved successfully",
		
		// group notifications
		'group_tools:action:notifications:error:toggle' => "Неправильная установка опции", //  "Invalid toggle option",
		'group_tools:action:notifications:success:disable' => "Уведомления для всех участников успешно отключены", //  "Successfully disabled notifications for every member",
		'group_tools:action:notifications:success:enable' => "Уведомления для всех участников успешно включены", //  "Successfully enabled notifications for every member",
	
		// Widgets
		// Group River Widget
		'widgets:group_river_widget:title' => "Активность группы", //  "Group activity",
	    'widgets:group_river_widget:description' => "Показывает активность группы в виджете", //  "Shows the activity of a group in a widget",

	    'widgets:group_river_widget:edit:num_display' => "Количество действий", //  "Number of activities",
		'widgets:group_river_widget:edit:group' => "Выберите группу", //  "Select a group",
		'widgets:group_river_widget:edit:no_groups' => "Чтобы использовать этот виджет необходимо быть участником хотя бы одной группы", //  "You need to be a member of at least one group to use this widget",

		'widgets:group_river_widget:view:not_configured' => "Этот виджет еще не сконфигурирован", //  "This widget is not yet configured",

		'widgets:group_river_widget:view:more' => "Активность в группе '%s'", //  "Activity in the '%s' group",
		'widgets:group_river_widget:view:noactivity' => "Активность не найдена", //  "We could not find any activity.",
		
		// Group Members
		'widgets:group_members:title' => "Участники группы", //  "Group members",
  		'widgets:group_members:description' => "Показывает участников этой группы", //  "Shows the members of this group",

  		'widgets:group_members:edit:num_display' => "Как много участников показывать", //  "How many members to show",
  		'widgets:group_members:view:no_members' => "Участники группы не найдены", //  "No group members found",
  		
  		// Group Invitations
		'widgets:group_invitations:title' => "Приглашения группы", //  "Group invitations",
	  	'widgets:group_invitations:description' => "Показывает непринятые приглашения группы для текущего пользователя", //  "Shows the outstanding group invitations for the current user",
	  	
	  	// Discussion
		"widgets:discussion:settings:group_only" => "Показывать обсуждения только ваших групп", //  "Only show discussions from groups you are member of",
  		'widgets:discussion:more' => "Посмотреть больше обсуждений", //  "View more discussions",
  		"widgets:discussion:description" => "Показывает последние обсуждения", //  "Shows the latest discussions",
  		
		// Forum topic widget
		'widgets:group_forum_topics:description' => "Показывать последние обсуждения", //  "Show the latest discussions",
		
		// index_groups
		'widgets:index_groups:description' => "Показывать последние группы в вашем сообществе", //  "Show the latest groups on your community",
		'widgets:index_groups:show_members' => "Показывать количество участников", //  "Show members count",
		'widgets:index_groups:featured' => "Показывать только популярные группы", //  "Show only featured groups",
		
		'widgets:index_group:filter:field' => "Фильтровать группы по полю группы", //  "Filter groups based on group field",
		'widgets:index_group:filter:value' => "со значением", //  "with value",
		'widgets:index_group:filter:no_filter' => "без фильтра", //  "No filter",
		
		// Featured Groups
		'widgets:featured_groups:description' => "Показывает список популярных групп в случайном порядке", //  "Shows a random list of featured groups",
	  	'widgets:featured_groups:edit:show_random_group' => "Показать непопулярные группы в случайном порядке", //  "Show a random non-featured group",
	  	
		// group_news widget
		"widgets:group_news:title" => "Новости группы", //  "Group News", 
		"widgets:group_news:description" => "Показывает последние 5 блогов из разных групп", //  "Shows latest 5 blogs from various groups", 
		"widgets:group_news:no_projects" => "Ни одна группа не сконфигурирована", //  "No groups configured", 
		"widgets:group_news:no_news" => "Для этой группы нет блогов", //  "No blogs for this group", 
		"widgets:group_news:settings:project" => "Группа", //  "Group", 
		"widgets:group_news:settings:no_project" => "Выберите группу", //  "Select a group",
		"widgets:group_news:settings:blog_count" => "Максимальное число блогов", //  "Max number of blogs",
		"widgets:group_news:settings:group_icon_size" => "Размер иконки группы", //  "Group icon size",
		"widgets:group_news:settings:group_icon_size:small" => "Маленькая", //  "Small",
		"widgets:group_news:settings:group_icon_size:medium" => "Средняя", //  "Medium",
		
	);
	
	add_translation("ru", $russian);
  	
