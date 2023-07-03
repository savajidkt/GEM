<div id="tab3" class="ays-survey-tab-content <?php echo ($ays_tab == 'tab3') ? 'ays-survey-tab-content-active' : ''; ?>">
    <p class="ays-subtitle"><?php echo __('Survey Settings',"survey-maker")?></p>
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays-category">
                <?php echo __('Survey categories', "survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" data-html="true" title="<?php
                    echo htmlspecialchars( sprintf(
                        __('Choose the category/categories your survey belongs to. To create a category, go to the %sCategories%s page.',"survey-maker"),
                        '<strong>',
                        '</strong>'
                    ) );
                ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <select id="ays-category" name="<?php echo esc_attr($html_name_prefix); ?>category_ids[]" multiple>
                <option></option>
                <?php
                foreach ($categories as $key => $category) {
                    $selected = in_array( $category['id'], $category_ids ) ? "selected" : "";
                    if( empty( $category_ids ) ){
                        if ( intval( $category['id'] ) == 1 ) {
                            $selected = 'selected';
                        }
                    }
                    echo '<option value="' . esc_attr($category["id"]) . '" ' . esc_attr($selected) . '>' . stripslashes( esc_attr($category['title']) ) . '</option>';
                }
                ?>
            </select>
        </div>
    </div> <!-- Survey Category -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays-status">
                <?php echo __('Survey status', "survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" data-html="true" title="<?php
                    echo htmlspecialchars( sprintf(
                        __("Decide whether your survey is active or not. If you choose %sDraft%s, the survey won't be shown anywhere on your website (you don't need to remove shortcodes).", "survey-maker"),
                        '<strong>',
                        '</strong>'
                    ) );
                ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <select id="ays-status" name="<?php echo esc_attr($html_name_prefix); ?>status">
                <option></option>
                <option <?php selected( $status, 'published' ); ?> value="published"><?php echo __( "Published", "survey-maker" ); ?></option>
                <option <?php selected( $status, 'draft' ); ?> value="draft"><?php echo __( "Draft", "survey-maker" ); ?></option>
            </select>
        </div>
    </div> <!-- Survey Status -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_show_title">
                <?php echo __('Show survey title',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the name of the survey on the front-end.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
                <input type="checkbox" id="ays_survey_show_title" name="ays_survey_show_title" value="on" <?php echo $survey_show_title ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show survey title -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_show_section_header">
                <?php echo __('Show section header info',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick the checkbox if you want to show the title and description of the section on the front-end.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
                <input type="checkbox" id="ays_survey_show_section_header" name="ays_survey_show_section_header" value="on" <?php echo $survey_show_section_header ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show section header info -->
    <hr/>    
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_enable_leave_page">
                <?php echo __('Enable confirmation box for leaving the page',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show a popup box whenever the survey taker wants to refresh or leave the page while taking the survey.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_survey_enable_leave_page" name="ays_survey_enable_leave_page" value="on" <?php echo ($survey_enable_leave_page) ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable confirmation box for leaving the page -->
    <hr>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_survey_enable_full_screen_mode">
                <?php echo __('Enable full-screen mode',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow the survey to enter full-screen mode by pressing the icon located in the top-right corner of the survey container.',"survey-maker")?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox"
                   class="ays-enable-timer1 ays_toggle_checkbox"
                   id="ays_survey_enable_full_screen_mode"
                   name="ays_survey_enable_full_screen_mode"
                   value="on"
                   <?php echo esc_attr($survey_full_screen);?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo $survey_full_screen == "checked" ? '' : 'display_none_not_important'; ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for='ays_survey_full_screen_button_color'>
                        <?php echo __('Full screen button color', "survey-maker"); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Specify the color of the full screen button.',"survey-maker"); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8 ">
                    <input type="text" class="ays-text-input" id='ays_survey_full_screen_button_color' name='ays_survey_full_screen_button_color' data-alpha="true" value="<?php echo esc_attr($survey_full_screen_button_color); ?>"/>
                </div>
            </div>
        </div>
    </div> <!-- Open Full Screen Mode -->
    <hr>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_survey_enable_progres_bar">
                <?php echo __('Enable live progress bar',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the current state of the user passing the survey. It will be shown at the bottom of the survey container.',"survey-maker")?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox"
                   class="ays-enable-timer1 ays_toggle_checkbox"
                   id="ays_survey_enable_progres_bar"
                   name="ays_survey_enable_progres_bar"
                   value="on"
                   <?php echo esc_attr($survey_enable_progress_bar);?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo $survey_enable_progress_bar == "checked" ? '' : 'display_none_not_important'; ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_survey_hide_section_pagination_text">
                        <?php echo __('Hide the pagination text',"survey-maker")?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick this option to hide the pagination text.',"survey-maker"); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox"
                   class="ays-enable-timer1"
                   id="ays_survey_hide_section_pagination_text"
                   name="ays_survey_hide_section_pagination_text"
                   value="on"
                   <?php echo esc_attr($survey_hide_section_pagination_text); ?>
                   />
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_survey_pagination_positioning">
                        <?php echo __('Pagination items positioning',"survey-maker")?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick the checkbox to change the position of the pagination items.',"survey-maker"); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <select class="ays-text-input ays-text-input-short" name="ays_survey_pagination_positioning">
                        <option <?php echo $survey_pagination_positioning == "none" ? "selected" : ""; ?> value="none"><?php echo __( "None", "survey-maker"); ?></option>
                        <option <?php echo $survey_pagination_positioning == "reverse" ? "selected" : ""; ?> value="reverse"><?php echo __( "Reverse", "survey-maker"); ?></option>
                        <option <?php echo $survey_pagination_positioning == "column" ? "selected" : ""; ?> value="column"><?php echo __( "Column", "survey-maker"); ?></option>
                        <option <?php echo $survey_pagination_positioning == "column_reverse" ? "selected" : ""; ?> value="column_reverse"><?php echo __( "Column Reverse", "survey-maker"); ?></option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_survey_hide_section_bar">
                        <?php echo __('Hide the bar',"survey-maker")?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick this option to hide the bar.',"survey-maker"); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox"
                   class="ays-enable-timer1"
                   id="ays_survey_hide_section_bar"
                   name="ays_survey_hide_section_bar"
                   value="on"
                   <?php echo esc_attr($survey_hide_section_bar); ?>
                   />
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_survey_progress_bar_text">
                        <?php echo __('Progress bar text',"survey-maker")?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Specify the text of the progress bar.',"survey-maker"); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="ays-text-input ays-text-input-short" id="ays_survey_progress_bar_text" name="ays_survey_progress_bar_text" value="<?php echo esc_attr($survey_progress_bar_text); ?>">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for='ays_survey_pagination_text_color'>
                        <?php echo __('Progress bar text color', "survey-maker"); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Specify the color of the pagination text.',"survey-maker"); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8 ">
                    <input type="text" class="ays-text-input" id='ays_survey_pagination_text_color' name='ays_survey_pagination_text_color' data-alpha="true" value="<?php echo esc_attr($survey_pagination_text_color); ?>"/>
                </div>
            </div> <!-- Progress bar text color' -->
        </div>
    </div> <!-- Live progres bar -->    
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_enable_clear_answer">
                <?php echo __('Enable clear answer button',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow the survey taker to clear the chosen answer.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_survey_enable_clear_answer" name="ays_survey_enable_clear_answer" value="on" <?php echo ($survey_enable_clear_answer) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Enable clear answer button -->
    <hr/>    
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_enable_previous_button">
                <?php echo __('Enable previous button', "survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Add a previous button that will let the users go back to the previous sections.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_survey_enable_previous_button" name="ays_survey_enable_previous_button" value="on" <?php echo ($survey_enable_previous_button) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Enable previous button -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_enable_survey_start_loader">
                <?php echo __('Enable survey loader', "survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick this option to display a loader until the survey container is loaded.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_survey_enable_survey_start_loader" name="ays_survey_enable_survey_start_loader" value="on" <?php echo ($survey_enable_survey_start_loader) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Enable survey start loader -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_allow_html_in_section_description">
                <?php echo __('Allow HTML in section description',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow implementing HTML coding in section description boxes.', "survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_survey_allow_html_in_section_description" name="ays_survey_allow_html_in_section_description" value="on" <?php echo ($survey_allow_html_in_section_description) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Allow HTML in section description -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label>
                <?php echo __('Change current survey creation date',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Change the survey creation date to your preferred date.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <div class="input-group mb-3">
                <input type="text" class="ays-text-input ays-text-input-short ays-survey-date-create" id="ays_survey_change_creation_date" name="ays_survey_change_creation_date" value="<?php echo esc_attr($date_created); ?>" placeholder="<?php echo current_time( 'mysql' ); ?>">
                <div class="input-group-append">
                    <label for="ays_survey_change_creation_date" class="input-group-text">
                        <span><i class="ays_fa ays_fa_calendar"></i></span>
                    </label>
                </div>
            </div>
        </div>
    </div> <!-- Change current survey creation date -->
    <hr/>
    <p class="ays-subtitle"><?php echo __('Question Settings',"survey-maker")?></p>
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_enable_randomize_questions">
                <?php echo __('Enable randomize questions',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the questions in a random sequence every time the survey takers participate in a survey.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_survey_enable_randomize_questions" name="ays_survey_enable_randomize_questions" value="on" <?php echo ($survey_enable_randomize_questions) ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable randomize questions -->    
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label>
                <?php echo __('Questions numbering',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Assign numbering to each question in ascending sequential order. Choose your preferred type from the list.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <select class="ays-text-input ays-text-input-short" name="ays_survey_show_question_numbering">
                <option <?php echo $survey_auto_numbering_questions == "none" ? "selected" : ""; ?> value="none"><?php echo __( "None", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering_questions == "1."   ? "selected" : ""; ?>   value="1."><?php echo __( "1.", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering_questions == "1)"   ? "selected" : ""; ?>   value="1)"><?php echo __( "1)", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering_questions == "A."   ? "selected" : ""; ?>   value="A."><?php echo __( "A.", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering_questions == "A)"   ? "selected" : ""; ?>   value="A)"><?php echo __( "A)", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering_questions == "a."   ? "selected" : ""; ?>   value="a."><?php echo __( "a.", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering_questions == "a)"   ? "selected" : ""; ?>   value="a)"><?php echo __( "a)", "survey-maker"); ?></option>
            </select>

        </div>
    </div> <!-- Show question numbering -->
    <hr/>    
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_show_questions_count">
                <?php echo __('Show questions count',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick this option to show every sections questions count',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox"
                class="ays-enable-timer1"
                id="ays_survey_show_questions_count"
                name="ays_survey_show_questions_count"
                value="on"
                <?php echo esc_attr($survey_show_sections_questions_count);?>/>
        </div>
    </div> <!-- Show sections questions count -->
    <hr/>    
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_required_questions_message">
                <?php echo __('Required questions message',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Specify the required message text displayed in case of the required questions.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="text" class="ays-text-input" name="ays_survey_required_questions_message" id="ays_survey_required_questions_message" value="<?php echo __($survey_required_questions_message , "survey-maker"); ?>" placeholder="<?php echo __( 'Required question message' , "survey-maker" ); ?>">
        </div>
    </div> <!-- Show sections questions count -->
    <hr/>
    <p class="ays-subtitle"><?php echo __('Answer Settings',"survey-maker")?></p>
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_enable_randomize_answers">
                <?php echo __('Enable randomize answers',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the answers in a random sequence every time the survey takers participate in a survey.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_survey_enable_randomize_answers" name="ays_survey_enable_randomize_answers" value="on" <?php echo ($survey_enable_randomize_answers) ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable randomize answers -->
    <hr/>    
    <div class="form-group row">
        <div class="col-sm-4">
            <label>
                <?php echo __('Answers numbering',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Assign numbering to each answer in ascending sequential order. Choose your preferred type from the list.',"survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <select class="ays-text-input ays-text-input-short" name="ays_survey_show_answers_numbering">
                <option <?php echo $survey_auto_numbering == "none" ? "selected" : ""; ?> value="none"><?php echo __( "None", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering == "1."   ? "selected" : ""; ?>   value="1."><?php echo __( "1.", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering == "1)"   ? "selected" : ""; ?>   value="1)"><?php echo __( "1)", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering == "A."   ? "selected" : ""; ?>   value="A."><?php echo __( "A.", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering == "A)"   ? "selected" : ""; ?>   value="A)"><?php echo __( "A)", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering == "a."   ? "selected" : ""; ?>   value="a."><?php echo __( "a.", "survey-maker"); ?></option>
                <option <?php echo $survey_auto_numbering == "a)"   ? "selected" : ""; ?>   value="a)"><?php echo __( "a)", "survey-maker"); ?></option>
            </select>

        </div>
    </div> <!-- Show answers numbering -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_allow_html_in_answers">
                <?php echo __('Allow HTML in answers',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow implementing HTML coding in answer boxes. This works only for Radio and Checkbox (Multiple) questions.', "survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_survey_allow_html_in_answers" name="ays_survey_allow_html_in_answers" value="on" <?php echo ($survey_allow_html_in_answers) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Allow HTML in answers -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_enable_info_autofill">
                <?php echo __('Autofill logged-in user data',"survey-maker"); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __("After enabling this option, logged in user's name and email will be autofilled in Name and Email fields.","survey-maker"); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_survey_enable_info_autofill" name="ays_survey_enable_info_autofill" <?php echo esc_attr($survey_info_autofill); ?>/>
        </div>
    </div><!-- Autofill logged-in user data -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_survey_main_url">
                <?php echo __('Survey main URL',"survey-maker")?>
                <a class="ays_help" data-toggle="tooltip" data-html="true" title="<?php echo  __('Write the URL link where your survey is located (in Front-end).',"survey-maker");
                ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="url" id="ays_survey_main_url" name="ays_survey_main_url" class="ays-text-input" value="<?php echo esc_attr($survey_main_url); ?>">
        </div>
    </div> <!-- Survey Main URL -->
   
</div>
