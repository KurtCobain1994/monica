<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/main/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Контакт не знайдено',
    'people_list_number_kids' => ':count дитина|:count дітей',
    'people_list_last_updated' => 'Остання консультація:',
    'people_list_number_reminders' => ':count нагадування|:count нагадувань',
    'people_list_blank_title' => 'У вас ще нікого немає',
    'people_list_blank_cta' => 'Додати когось',
    'people_list_sort' => 'Упорядкувати',
    'people_list_stats' => ':count контакт|:count контактів',
    'people_list_firstnameAZ' => 'Сортувати за іменем А → Я',
    'people_list_firstnameZA' => 'Сортувати за іменем Я → А',
    'people_list_lastnameAZ' => 'Сортувати за прізвищем А → Я',
    'people_list_lastnameZA' => 'Сортувати за прізвищем Я → А',
    'people_list_lastactivitydateNewtoOld' => 'Сортувати за датою останньої активності, від новіших до старіших',
    'people_list_lastactivitydateOldtoNew' => 'Сортувати за датою останньої активності, від старіших до новіших',
    'people_list_filter_tag' => 'Показано всі контакти, відмічені',
    'people_list_clear_filter' => 'Очистити фільтр',
    'people_list_contacts_per_tags' => ':count контакт|:count контактів',
    'people_list_show_dead' => 'Показати померлих (:count)',
    'people_list_hide_dead' => 'Приховати померлих людей (:count)',
    'people_search' => 'Знайти ваші контакти…',
    'people_search_no_results' => 'Результатів не знайдено',
    'people_search_next' => 'Далі',
    'people_search_prev' => 'Назад',
    'people_search_rows_per_page' => 'Рядків на сторінку',
    'people_search_of' => 'з',
    'people_search_page' => 'Сторінка',
    'people_search_all' => 'Усі',
    'people_add_new' => 'Додати нову особу',
    'people_list_account_usage' => 'Ваш обліковий запис використовує :current/:limit контактів',
    'people_list_account_upgrade_title' => 'Оновіть свій обліковий запис, щоб використвувати його на повну потужність.',
    'people_list_account_upgrade_cta' => 'Оновіть тарифний план',
    'people_list_untagged' => 'Переглянути контакти без міток',
    'people_list_filter_untag' => 'Показано всі контакти без міток',
    'archived_contact_readonly' => 'Архівні контакти не можна редагувати. Будь ласка, спершу розархівуйте.',

    // people add
    'people_add_title' => 'Додати нову особу',
    'people_add_missing' => 'Не знайдено жодної людини – додайте нову зараз',
    'people_add_firstname' => 'Ім\'я',
    'people_add_middlename' => 'По батькові (необовʼязково)',
    'people_add_lastname' => 'Прізвище (необовʼязково)',
    'people_add_email' => 'Електронна пошта (необовʼязково)',
    'people_add_nickname' => 'Прізвисько (необовʼязково)',
    'people_add_cta' => 'Додати',
    'people_save_and_add_another_cta' => 'Надіслати і додати когось іншого',
    'people_add_success' => ':name було успішно створено',
    'people_add_gender' => 'Стать',
    'people_delete_success' => 'Контакт видалено',
    'people_delete_message' => 'Видалити контакт',
    'people_delete_confirmation' => 'Ви впевнені, що хочете видалити :name? Видалення є миттєвим і незворотним.',
    'people_add_birthday_reminder' => 'Привітайте з днем народження :name',
    'people_add_birthday_reminder_deceased' => 'У цей день :name святкував би свій день народження',
    'people_add_import' => 'Ви хочете <a href=":url">імпортувати ваші контакти</a>?',
    'people_edit_email_error' => 'Обліковий запис з цією електронною адресою вже існує. Будь ласка, оберіть іншу.',
    'people_export' => 'Експортувати як vCard',
    'people_add_reminder_for_birthday' => 'Створити щорічне нагадування про день народження',

    // show
    'section_contact_information' => 'Контактна інформація',
    'section_personal_activities' => 'Активності',
    'section_personal_reminders' => 'Нагадування',
    'section_personal_tasks' => 'Завдання',
    'section_personal_gifts' => 'Подарунки',
    'section_personal_notes' => 'Нотатки',

    // archived contacts
    'list_link_to_active_contacts' => 'Ви переглядаєте архівовані контакти. Подивіться <a href=":url">список активних контактів</a>.',
    'list_link_to_archived_contacts' => 'Список архівованих контактів',

    // Header
    'me' => 'Це ви',
    'edit_contact_information' => 'Редагувати контактну інформацію',
    'contact_archive' => 'Архівувати контакт',
    'contact_unarchive' => 'Розархівувати контакт',
    'contact_archive_help' => 'Архівовані контакти не показуються в списку контактів, але показуються в результатах пошуку.',
    'call_button' => 'Записати дзвінок',
    'set_favorite' => 'Улюблені контакти показуються на початку списку контактів',

    // Stay in touch
    'stay_in_touch' => 'Підтримуйте звʼязок',
    'stay_in_touch_frequency' => 'Звʼязуйтеся кожного дня|Звʼязуйтеся кожні {count} днів',
    'stay_in_touch_next_date' => 'Next due: {date}',
    'stay_in_touch_invalid' => 'Частота має більшою за 0.',
    'stay_in_touch_premium' => 'You need to upgrade your account to make use of this feature',
    'stay_in_touch_modal_title' => 'Підтримуйте звʼязок',
    'stay_in_touch_modal_desc' => 'Ми можемо періодично нагадувати вам електронною поштою про підтримування звʼязку з {firstname}.',
    'stay_in_touch_modal_label' => 'Відправляти мені електронного листа кожен… {count} день|Відправляти мені електронного листа кожні… {count} дні',

    // Calls
    'modal_call_title' => 'Записати дзвінок',
    'modal_call_comment' => 'Про що ви говорили? (необовʼязково)',
    'modal_call_exact_date' => 'Дзвінок відбувся',
    'modal_call_who_called' => 'Хто дзвонив?',
    'modal_call_emotion' => 'Хочете записати, як ви почувалися під час цього дзвінка? (необовʼязково)',
    'calls_add_success' => 'Дзвінок збережено.',
    'call_delete_confirmation' => 'Ви точно хочете видалити цей дзвінок?',
    'call_delete_success' => 'Дзвінок було успішно видалено',
    'call_title' => 'Дзвінки',
    'call_empty_comment' => 'Немає подробиць',
    'call_blank_title' => 'Записуйте спільні дзвінки з {name}',
    'call_blank_desc' => 'Ви дзвонили до {name}',
    'call_you_called' => 'Ви дзвонили',
    'call_he_called' => '{name} дзвонив',
    'call_emotions' => 'Емоції:',

    // Conversation
    'conversation_blank' => 'Записуйте розмови з :name у соціальних мережах, SMS…',
    'conversation_delete_link' => 'Видалити розмову',
    'conversation_edit_title' => 'Редагувати розмову',
    'conversation_edit_delete' => 'Ви точно хочете видалити цю розмову? Видалення є незворотним.',
    'conversation_add_success' => 'Розмову було успішно додано.',
    'conversation_edit_success' => 'Розмову було успішно змінено.',
    'conversation_delete_success' => 'Розмову було успішно видалено.',
    'conversation_add_title' => 'Записати нову розмову',
    'conversation_add_when' => 'Коли ця розмова відбулася?',
    'conversation_add_who_wrote' => 'Хто відправив це повідомлення?',
    'conversation_add_how' => 'Як ви спілкувалися?',
    'conversation_add_you' => 'Ви',
    'conversation_add_content' => 'Запишіть, що було сказано',
    'conversation_add_what_was_said' => 'Що ви сказали?',
    'conversation_add_another' => 'Додати ще повідомлення',
    'conversation_add_error' => 'Вам необхідно додати хоча б одне повідомлення.',
    'conversation_list_table_messages' => 'Повідомлення',
    'conversation_list_table_content' => 'Частковий вміст (останнє повідомлення)',
    'conversation_list_title' => 'Бесіди',
    'conversation_list_cta' => 'Журнал розмов',

    // age - birthday
    'birthdate_not_set' => 'День народження не вказано',
    'age_approximate_in_years' => 'близько :age років',
    'age_exact_in_years' => ':age років',
    'age_exact_birthdate' => 'народився :date',

    // Last called
    'last_called' => 'Останній виклик: :date',
    'last_talked_to' => 'Останній дзвінок: {date}',
    'last_called_empty' => 'Останній виклик: невідомо',
    'last_activity_date' => 'Остання активність разом: :date',
    'last_activity_date_empty' => 'Остання активність разом: невідомо',

    // additional information
    'information_edit_success' => 'Профіль було успішно оновлено',
    'information_edit_title' => 'Редагувати особисту інформацію :name',
    'information_edit_max_size' => 'Максимально :size кілобайт.',
    'information_edit_max_size2' => 'Максимально :size кілобайт.',
    'information_edit_firstname' => 'Ім\'я',
    'information_edit_lastname' => 'Прізвище (необовʼязково)',
    'information_edit_description' => 'Опис (необовʼязково)',
    'information_edit_description_help' => 'Використовується в списку контактів, щоб додати деякий контекст, якщо це необхідно.',
    'information_edit_unknown' => 'Я не знаю віку цієї людини',
    'information_edit_probably' => 'Ця людина, ймовірно,…',
    'information_edit_not_year' => 'Я знаю день і місяць народження цієї людини, але не рік…',
    'information_edit_exact' => 'Я знаю точний день народження цієї людини…',
    'information_edit_birthdate_label' => 'День народження',
    'information_no_work_defined' => 'Інформацію про роботу не визначено',
    'information_work_at' => 'у :company',
    'work_add_cta' => 'Оновити інформацію про роботу',
    'work_edit_success' => 'Інформація про роботу оновлена',
    'work_edit_title' => 'Оновити інформацію про роботу :name',
    'work_edit_job' => 'Посада (необов\'язково)',
    'work_edit_company' => 'Компанія (необов\'язково)',
    'work_information' => 'Інформація про роботу',

    // food preferences
    'food_preferences_add_success' => 'Вподобання у їжі збережено',
    'food_preferences_edit_description' => 'Можливо, :firstname або хтось у родині :family має алергію або не любить конкретну пляшку вина. Вкажіть їх тут, щоб ви пам\'ятали наступного разу, коли запросите їх на вечерю',
    'food_preferences_edit_description_no_last_name' => 'Можливо, :firstname або хтось у родині :family має алергію або не любить конкретну пляшку вина. Вкажіть їх тут, щоб ви пам\'ятали наступного разу, коли запросите їх на вечерю',
    'food_preferences_edit_title' => 'Вкажіть вподобання у їжі',
    'food_preferences_edit_cta' => 'Зберегти уподобання їжі',
    'food_preferences_title' => 'Вподобання їжі',
    'food_preferences_cta' => 'Додати уподобання їжі',

    // reminders
    'reminders_blank_title' => 'Хочете отримати нагадування про щось щодо :name?',
    'reminders_blank_add_activity' => 'Додати нагадування',
    'reminders_add_title' => 'Про що ви хочете отримати нагадування щодо :name?',
    'reminders_add_description' => 'Будь ласка, нагадайте мені…',
    'reminders_add_next_time' => 'Коли ви хочете отримати наступне нагадування про це?',
    'reminders_add_once' => 'Нагадати один раз',
    'reminders_add_recurrent' => 'Нагадувати кожні',
    'reminders_add_starting_from' => 'від вказаної вище дати',
    'reminders_add_cta' => 'Додати нагадування',
    'reminders_edit_update_cta' => 'Змінити нагадування',
    'reminders_add_error_custom_text' => 'Необхідно вказати текст цього нагадування',
    'reminders_create_success' => 'Нагадування було успішно додано',
    'reminders_delete_success' => 'Нагадування було успішно видалено',
    'reminders_update_success' => 'Нагадування було успішно змінено',
    'reminders_add_optional_comment' => 'Додатковий коментар',

    'reminder_frequency_day' => 'щодня|кожні :number днів',
    'reminder_frequency_week' => 'щотижня|кожні :number тижнів',
    'reminder_frequency_month' => 'щомісяця|кожні :number місяців',
    'reminder_frequency_year' => 'щороку|кожні :number років',
    'reminder_frequency_one_time' => ':date',
    'reminders_delete_confirmation' => 'Ви точно хочете видалити це нагадування?',
    'reminders_delete_cta' => 'Видалити',
    'reminders_next_expected_date' => 'on',
    'reminders_cta' => 'Додати нагадування',
    'reminders_description' => 'Ми відправимо електронного листа з кожним з перелічених далі нагадуванням. Нагадування відправляються зранку у день події. Нагадування про дні народження додаються автоматично і не можуть бути видаленими. Якщо хочете змінити дати, відредагуйте день народження контактів.',
    'reminders_one_time' => 'Один раз',
    'reminders_type_week' => 'тиждень',
    'reminders_type_month' => 'місяць',
    'reminders_type_year' => 'рік',
    'reminders_birthday' => 'День народження :name',
    'reminders_free_plan_warning' => 'You are on the Free plan. No emails are sent on this plan. To receive your reminders by email, upgrade your account.',

    // relationships
    'relationship_form_add' => 'Додати новий звʼязок',
    'relationship_form_edit' => 'Редагувати звʼязок',
    'relationship_form_is_with' => 'Ця людина є…',
    'relationship_form_is_with_name' => ':name is…',
    'relationship_form_add_choice' => 'Who is the relationship with?',
    'relationship_form_create_contact' => 'Add a new person',
    'relationship_form_associate_contact' => 'An existing contact',
    'relationship_form_associate_dropdown' => 'Search and select an existing contact from the dropdown below',
    'relationship_form_associate_dropdown_placeholder' => 'Search and select an existing contact',
    'relationship_form_also_create_contact' => 'Create a Contact entry for this person.',
    'relationship_form_add_description' => 'This will let you treat this person like any other contact.',
    'relationship_form_add_no_existing_contact' => 'You don’t have any contacts who can be related to :name at the moment.',
    'relationship_delete_confirmation' => 'Are you sure you want to delete this relationship? Deletion is permanent.',
    'relationship_unlink_confirmation' => 'Are you sure you want to delete this relationship? This person will not be deleted – only the relationship between the two.',
    'relationship_form_add_success' => 'The relationship has been successfully set.',
    'relationship_form_deletion_success' => 'The relationship has been deleted.',

    // tasks
    'tasks_title' => 'Tasks',
    'tasks_blank_title' => 'You don’t have any tasks yet.',
    'tasks_form_title' => 'Title',
    'tasks_form_description' => 'Description (optional)',
    'tasks_add_task' => 'Add a task',
    'tasks_delete_success' => 'The task has been deleted successfully',
    'tasks_complete_success' => 'The task has changed status successfully',

    // activities
    'activity_title' => 'Activities',
    'activity_type_category_simple_activities' => 'Simple activities',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Food',
    'activity_type_category_cultural_activities' => 'Cultural activities',
    'activity_type_just_hung_out' => 'just hung out',
    'activity_type_watched_movie_at_home' => 'watched a movie at home',
    'activity_type_talked_at_home' => 'just talked at home',
    'activity_type_did_sport_activities_together' => 'played a sport together',
    'activity_type_ate_at_his_place' => 'ate at their place',
    'activity_type_went_bar' => 'went to a bar',
    'activity_type_ate_at_home' => 'ate at home',
    'activity_type_picnicked' => 'picnicked',
    'activity_type_ate_restaurant' => 'ate at a restaurant',
    'activity_type_went_theater' => 'went to the theater',
    'activity_type_went_concert' => 'went to a concert',
    'activity_type_went_play' => 'went to a play',
    'activity_type_went_museum' => 'went to the museum',
    'activities_add_activity' => 'Add activity',
    'activities_add_more_details' => 'Add more details',
    'activities_add_emotions' => 'Add emotions',
    'activities_add_category' => 'Indicate a category',
    'activities_add_participants_cta' => 'Add participants',
    'activities_item_information' => ':Activity. Happened on :date',
    'activities_add_title' => 'What did you do with {name}?',
    'activities_summary' => 'Describe what you did',
    'activities_add_pick_activity' => 'Would you like to categorize this activity? You don’t have to, but it will give you statistics later on (optional)',
    'activities_add_date_occured' => 'The activity happened on…',
    'activities_add_participants' => 'Who, apart from {name}, participated in this activity? (optional)',
    'activities_add_emotions_title' => 'Do you want to log how you felt during this activity? (optional)',
    'activities_blank_title' => 'Keep track of what you’ve done with {name} in the past, and what you’ve talked about',
    'activities_blank_add_activity' => 'Add an activity',
    'activities_add_success' => 'The activity has been added successfully',
    'activities_add_error' => 'Error when adding the activity',
    'activities_update_success' => 'The activity has been updated successfully',
    'activities_delete_success' => 'The activity has been deleted successfully',
    'activities_who_was_involved' => 'Who was involved?',
    'activities_activity' => 'Activity Category',
    'activities_view_activities_report' => 'View activities report',
    'activities_profile_title' => 'Activities report between :name and you',
    'activities_profile_subtitle' => 'You’ve logged :total_activities activity with :name in total and :activities_last_twelve_months in the last 12 months so far.|You’ve logged :total_activities activities with :name in total and :activities_last_twelve_months in the last 12 months so far.',
    'activities_profile_year_summary_activity_types' => 'Here is a breakdown of the type of activities you’ve done together in :year',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => ':value activity|:value activities',
    'activities_list_participants' => 'Participants ({total}):',
    'activities_list_emotions' => 'Emotions felt:',
    'activities_list_date' => 'Happened on',
    'activities_list_category' => 'Category:',

    // notes
    'notes_create_success' => 'The note has been created successfully',
    'notes_update_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'The note has been deleted successfully',
    'notes_add_cta' => 'Add note',
    'notes_favorite' => 'Add/remove from favorites',
    'notes_delete_title' => 'Delete a note',
    'notes_delete_confirmation' => 'Are you sure you want to delete this note? Deletion is permanent',

    // gifts
    'gifts_title' => 'Gifts',
    'gifts_add_success' => 'The gift has been added successfully',
    'gifts_delete_success' => 'The gift has been deleted successfully',
    'gifts_delete_confirmation' => 'Are you sure you want to delete this gift?',
    'gifts_add_gift' => 'Add a gift',
    'gifts_link' => 'Link',
    'gifts_for' => 'For: {name}',
    'gifts_delete_cta' => 'Delete',
    'gifts_add_title' => 'Gift management for :name',
    'gifts_add_gift_idea' => 'Gift idea',
    'gifts_add_gift_already_offered' => 'Gift given',
    'gifts_add_gift_received' => 'Gift received',
    'gifts_add_gift_title' => 'What is this gift?',
    'gifts_add_gift_name' => 'Gift name',
    'gifts_add_link' => 'Link to the web page (optional)',
    'gifts_add_value' => 'Value (optional)',
    'gifts_add_comment' => 'Comment (optional)',
    'gifts_add_recipient' => 'Recipient (optional)',
    'gifts_add_recipient_field' => 'Recipient',
    'gifts_add_photo' => 'Photo (optional)',
    'gifts_add_photo_title' => 'Add a photo for this gift',
    'gifts_add_someone' => 'This gift is for someone in {name}’s family in particular',
    'gifts_delete_title' => 'Delete a gift',
    'gifts_ideas' => 'Gift ideas',
    'gifts_offered' => 'Gifts given',
    'gifts_offered_as_an_idea' => 'Mark as an idea',
    'gifts_received' => 'Gifts received',
    'gifts_view_comment' => 'View comment',
    'gifts_mark_offered' => 'Mark as given',
    'gifts_update_success' => 'The gift has been updated successfully',
    'gifts_add_date' => 'Date (optional)',

    // debts
    'debt_delete_confirmation' => 'Are you sure you want to delete this debt?',
    'debt_delete_success' => 'The debt has been deleted successfully',
    'debt_add_success' => 'The debt has been added successfully',
    'debt_title' => 'Debts',
    'debt_add_cta' => 'Add debt',
    'debt_you_owe' => 'You owe :amount',
    'debt_they_owe' => ':name owes you :amount',
    'debt_add_title' => 'Debt management',
    'debt_add_you_owe' => 'You owe :name',
    'debt_add_they_owe' => ':name owes you',
    'debt_add_amount' => 'the sum of',
    'debt_add_reason' => 'for the following reason (optional)',
    'debt_add_add_cta' => 'Add debt',
    'debt_edit_update_cta' => 'Update debt',
    'debt_edit_success' => 'The debt has been updated successfully',
    'debts_blank_title' => 'Manage debts you owe to :name or :name owes you',

    // tags
    'tag_edit' => 'Edit tag',
    'tag_add' => 'Add tags',
    'tag_add_search' => 'Add or search tags',
    'tag_no_tags' => 'No tags yet',

    // Introductions
    'introductions_sidebar_title' => 'How you met',
    'introductions_blank_cta' => 'Indicate how you met :name',
    'introductions_title_edit' => 'How did you meet :name?',
    'introductions_additional_info' => 'Explain how and where you met',
    'introductions_edit_met_through' => 'Has someone introduced you to this person?',
    'introductions_no_met_through' => 'No one',
    'introductions_first_met_date' => 'Date you met',
    'introductions_no_first_met_date' => 'I don’t know the date we met',
    'introductions_first_met_date_known' => 'This is the date we met',
    'introductions_add_reminder' => 'Add a reminder to celebrate this encounter on the anniversary this event happened',
    'introductions_update_success' => 'You’ve successfully updated the information about how you met this person',
    'introductions_met_through' => 'Met through <a href=":url">:name</a>',
    'introductions_met_date' => 'Met on :date',
    'introductions_reminder_title' => 'Anniversary of the day you first met',

    // Deceased
    'deceased_reminder_title' => 'Anniversary of the death of :name',
    'deceased_mark_person_deceased' => 'Mark this as deceased',
    'deceased_know_date' => 'I know the date that this person died',
    'deceased_add_reminder' => 'Add a reminder for this date',
    'deceased_label' => 'Deceased',
    'deceased_date_label' => 'Deceased date',
    'deceased_label_with_date' => 'Deceased on :date',
    'deceased_age' => 'Age at death',

    // Contact information
    'contact_info_title' => 'Contact information',
    'contact_info_form_content' => 'Content',
    'contact_info_form_contact_type' => 'Contact type',
    'contact_info_form_personalize' => 'Personalize',
    'contact_info_address' => 'Lives in',

    // Addresses
    'contact_address_title' => 'Addresses',
    'contact_address_form_name' => 'Label (optional)',
    'contact_address_form_street' => 'Street (optional)',
    'contact_address_form_city' => 'City (optional)',
    'contact_address_form_province' => 'Province (optional)',
    'contact_address_form_postal_code' => 'Postal code (optional)',
    'contact_address_form_country' => 'Country (optional)',
    'contact_address_form_latitude' => 'Latitude (numbers only) (optional)',
    'contact_address_form_longitude' => 'Longitude (numbers only) (optional)',

    // Pets
    'pets_kind' => 'Kind of pet',
    'pets_name' => 'Name (optional)',
    'pets_create_success' => 'The pet has been successfully added',
    'pets_update_success' => 'The pet has been updated',
    'pets_delete_success' => 'The pet has been deleted',
    'pets_title' => 'Pets',
    'pets_reptile' => 'Reptile',
    'pets_bird' => 'Bird',
    'pets_cat' => 'Cat',
    'pets_dog' => 'Dog',
    'pets_fish' => 'Fish',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Horse',
    'pets_rabbit' => 'Rabbit',
    'pets_rat' => 'Rat',
    'pets_small_animal' => 'Small animal',
    'pets_other' => 'Other',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, …',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Story (optional)',
    'life_event_create_date' => 'You do not need to indicate a month or a day – only the year is mandatory.',
    'life_event_create_default_description' => 'Add information about what you know',
    'life_event_create_add_yearly_reminder' => 'Add a yearly reminder for this event',
    'life_event_create_success' => 'The life event has been added',
    'life_event_delete_title' => 'Delete a life event',
    'life_event_delete_description' => 'Are you sure you want to delete this life event? Deletion is permanent.',
    'life_event_delete_success' => 'The life event has been deleted',
    'life_event_date_it_happened' => 'Date it happened',
    'life_event_category_work_education' => 'Work & education',
    'life_event_category_family_relationships' => 'Family & relationships',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Health & wellness',
    'life_event_category_travel_experiences' => 'Travel & experiences',
    'life_event_sentence_new_job' => 'Started a new job',
    'life_event_sentence_retirement' => 'Retired',
    'life_event_sentence_new_school' => 'Started school',
    'life_event_sentence_study_abroad' => 'Studied abroad',
    'life_event_sentence_volunteer_work' => 'Started volunteering',
    'life_event_sentence_published_book_or_paper' => 'Published a paper',
    'life_event_sentence_military_service' => 'Started military service',
    'life_event_sentence_new_relationship' => 'Started a relationship',
    'life_event_sentence_engagement' => 'Got engaged',
    'life_event_sentence_marriage' => 'Got married',
    'life_event_sentence_anniversary' => 'Anniversary',
    'life_event_sentence_expecting_a_baby' => 'Expects a baby',
    'life_event_sentence_new_child' => 'Had a child',
    'life_event_sentence_new_family_member' => 'Added a family member',
    'life_event_sentence_new_pet' => 'Got a pet',
    'life_event_sentence_end_of_relationship' => 'Ended a relationship',
    'life_event_sentence_loss_of_a_loved_one' => 'Lost a loved one',
    'life_event_sentence_moved' => 'Moved',
    'life_event_sentence_bought_a_home' => 'Bought a home',
    'life_event_sentence_home_improvement' => 'Made a home improvement',
    'life_event_sentence_holidays' => 'Went on holidays',
    'life_event_sentence_new_vehicle' => 'Got a new vehicle',
    'life_event_sentence_new_roommate' => 'Got a roommate',
    'life_event_sentence_overcame_an_illness' => 'Overcame an illness',
    'life_event_sentence_quit_a_habit' => 'Quit a habit',
    'life_event_sentence_new_eating_habits' => 'Started new eating habits',
    'life_event_sentence_weight_loss' => 'Lost weight',
    'life_event_sentence_wear_glass_or_contact' => 'Started to wear glass or contact lenses',
    'life_event_sentence_broken_bone' => 'Broke a bone',
    'life_event_sentence_removed_braces' => 'Removed braces',
    'life_event_sentence_surgery' => 'Had surgery',
    'life_event_sentence_dentist' => 'Went to the dentist',
    'life_event_sentence_new_sport' => 'Started a sport',
    'life_event_sentence_new_hobby' => 'Started a hobby',
    'life_event_sentence_new_instrument' => 'Learned a new instrument',
    'life_event_sentence_new_language' => 'Learned a new language',
    'life_event_sentence_tattoo_or_piercing' => 'Got a tattoo or piercing',
    'life_event_sentence_new_license' => 'Got a license',
    'life_event_sentence_travel' => 'Traveled',
    'life_event_sentence_achievement_or_award' => 'Got an achievement or award',
    'life_event_sentence_changed_beliefs' => 'Changed beliefs',
    'life_event_sentence_first_word' => 'Spoke for the first time',
    'life_event_sentence_first_kiss' => 'Kissed for the first time',

    // documents
    'document_list_title' => 'Documents',
    'document_list_cta' => 'Upload document',
    'document_list_blank_desc' => 'Here you can store documents related to this person.',
    'document_upload_zone_cta' => 'Upload a file',
    'document_upload_zone_progress' => 'Uploading the document…',
    'document_upload_zone_error' => 'There was an error uploading the document. Please try again below.',

    // Photos
    'photo_title' => 'Photos',
    'photo_list_title' => 'Related photos',
    'photo_list_cta' => 'Upload photo',
    'photo_list_blank_desc' => 'You can store images about this contact. Upload one now!',
    'photo_upload_zone_cta' => 'Upload a photo',
    'photo_current_profile_pic' => 'Current profile picture',
    'photo_make_profile_pic' => 'Make profile picture',
    'photo_delete' => 'Delete photo',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => 'Change your avatar',
    'avatar_question' => 'Which avatar would you like to use?',
    'avatar_default_avatar' => 'The default avatar',
    'avatar_adorable_avatar' => 'The Adorable avatar',
    'avatar_gravatar' => 'The Gravatar associated with the email address of this person. <a href="https://gravatar.com/">Gravatar</a> is a global system that lets users associate email addresses with photos.',
    'avatar_current' => 'Keep the current avatar',
    'avatar_photo' => 'From a photo that you upload',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',

    // logs
    'auditlogs_link' => 'History',
    'auditlogs_title' => 'Everything that happened to :name',
    'auditlogs_breadcrumb' => 'History',
    'auditlogs_author' => 'By :name on :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Work',
    'contact_field_label_cell' => 'Mobile',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Main',
    'contact_field_label_other' => 'Other',
    'contact_field_label_personal' => 'Personal',
];
