var PMA_messages = new Array();
PMA_messages['strNoDropDatabases'] = "\"DROP DATABASE\" statements are disabled.";
PMA_messages['strConfirm'] = "Confirm";
PMA_messages['strDoYouReally'] = "Do you really want to execute \"%s\"?";
PMA_messages['strDropDatabaseStrongWarning'] = "You are about to DESTROY a complete database!";
PMA_messages['strDropTableStrongWarning'] = "You are about to DESTROY a complete table!";
PMA_messages['strTruncateTableStrongWarning'] = "You are about to TRUNCATE a complete table!";
PMA_messages['strDeleteTrackingData'] = "Delete tracking data for this table?";
PMA_messages['strDeleteTrackingDataMultiple'] = "Delete tracking data for these tables?";
PMA_messages['strDeleteTrackingVersion'] = "Delete tracking data for this version?";
PMA_messages['strDeleteTrackingVersionMultiple'] = "Delete tracking data for these versions?";
PMA_messages['strDeletingTrackingEntry'] = "Delete entry from tracking report?";
PMA_messages['strDeletingTrackingData'] = "Deleting tracking data";
PMA_messages['strDroppingPrimaryKeyIndex'] = "Dropping Primary Key/Index";
PMA_messages['strDroppingForeignKey'] = "Dropping Foreign key.";
PMA_messages['strOperationTakesLongTime'] = "This operation could take a long time. Proceed anyway?";
PMA_messages['strDropUserGroupWarning'] = "Do you really want to delete user group \"%s\"?";
PMA_messages['strConfirmDeleteQBESearch'] = "Do you really want to delete the search \"%s\"?";
PMA_messages['strConfirmNavigation'] = "You have unsaved changes; are you sure you want to leave this page?";
PMA_messages['strDropUserWarning'] = "Do you really want to revoke the selected user(s) ?";
PMA_messages['strDeleteCentralColumnWarning'] = "Do you really want to delete this central column?";
PMA_messages['strDropRTEitems'] = "Do you really want to delete the selected items?";
PMA_messages['strDropPartitionWarning'] = "Do you really want to DROP the selected partition(s)? This will also DELETE the data related to the selected partition(s)!";
PMA_messages['strTruncatePartitionWarning'] = "Do you really want to TRUNCATE the selected partition(s)?";
PMA_messages['strRemovePartitioningWarning'] = "Do you really want to remove partitioning?";
PMA_messages['strResetSlaveWarning'] = "Do you really want to RESET SLAVE?";
PMA_messages['strChangeColumnCollation'] = "This operation will attempt to convert your data to the new collation. In rare cases, especially where a character doesn\'t exist in the new collation, this process could cause the data to appear incorrectly under the new collation; in this case we suggest you revert to the original collation and refer to the tips at <a href=\"%s\" target=\"garbled_data_wiki\">Garbled Data</a>.<br/><br/>Are you sure you wish to change the collation and convert the data?";
PMA_messages['strChangeAllColumnCollationsWarning'] = "Through this operation, MySQL attempts to map the data values between collations. If the character sets are incompatible, there may be data loss and this lost data may <b>NOT</b> be recoverable simply by changing back the column collation(s). <b>To convert existing data, it is suggested to use the column(s) editing feature (the \"Change\" Link) on the table structure page. </b><br/><br/>Are you sure you wish to change all the column collations and convert the data?";
PMA_messages['strSaveAndClose'] = "Save & close";
PMA_messages['strReset'] = "Reset";
PMA_messages['strResetAll'] = "Reset all";
PMA_messages['strFormEmpty'] = "Missing value in the form!";
PMA_messages['strRadioUnchecked'] = "Select at least one of the options!";
PMA_messages['strEnterValidNumber'] = "Please enter a valid number!";
PMA_messages['strEnterValidLength'] = "Please enter a valid length!";
PMA_messages['strAddIndex'] = "Add index";
PMA_messages['strEditIndex'] = "Edit index";
PMA_messages['strAddToIndex'] = "Add %s column(s) to index";
PMA_messages['strCreateSingleColumnIndex'] = "Create single-column index";
PMA_messages['strCreateCompositeIndex'] = "Create composite index";
PMA_messages['strCompositeWith'] = "Composite with:";
PMA_messages['strMissingColumn'] = "Please select column(s) for the index.";
PMA_messages['strLeastColumnError'] = "You have to add at least one column.";
PMA_messages['strPreviewSQL'] = "Preview SQL";
PMA_messages['strSimulateDML'] = "Simulate query";
PMA_messages['strMatchedRows'] = "Matched rows:";
PMA_messages['strSQLQuery'] = "SQL query:";
PMA_messages['strYValues'] = "Y values";
PMA_messages['strHostEmpty'] = "The host name is empty!";
PMA_messages['strUserEmpty'] = "The user name is empty!";
PMA_messages['strPasswordEmpty'] = "The password is empty!";
PMA_messages['strPasswordNotSame'] = "The passwords aren\'t the same!";
PMA_messages['strRemovingSelectedUsers'] = "Removing Selected Users";
PMA_messages['strClose'] = "Close";
PMA_messages['strTemplateCreated'] = "Template was created.";
PMA_messages['strTemplateLoaded'] = "Template was loaded.";
PMA_messages['strTemplateUpdated'] = "Template was updated.";
PMA_messages['strTemplateDeleted'] = "Template was deleted.";
PMA_messages['strOther'] = "Other";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "Connections / Processes";
PMA_messages['strIncompatibleMonitorConfig'] = "Local monitor configuration incompatible!";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "The chart arrangement configuration in your browsers local storage is not compatible anymore to the newer version of the monitor dialog. It is very likely that your current configuration will not work anymore. Please reset your configuration to default in the <i>Settings</i> menu.";
PMA_messages['strQueryCacheEfficiency'] = "Query cache efficiency";
PMA_messages['strQueryCacheUsage'] = "Query cache usage";
PMA_messages['strQueryCacheUsed'] = "Query cache used";
PMA_messages['strSystemCPUUsage'] = "System CPU usage";
PMA_messages['strSystemMemory'] = "System memory";
PMA_messages['strSystemSwap'] = "System swap";
PMA_messages['strAverageLoad'] = "Average load";
PMA_messages['strTotalMemory'] = "Total memory";
PMA_messages['strCachedMemory'] = "Cached memory";
PMA_messages['strBufferedMemory'] = "Buffered memory";
PMA_messages['strFreeMemory'] = "Free memory";
PMA_messages['strUsedMemory'] = "Used memory";
PMA_messages['strTotalSwap'] = "Total swap";
PMA_messages['strCachedSwap'] = "Cached swap";
PMA_messages['strUsedSwap'] = "Used swap";
PMA_messages['strFreeSwap'] = "Free swap";
PMA_messages['strBytesSent'] = "Bytes sent";
PMA_messages['strBytesReceived'] = "Bytes received";
PMA_messages['strConnections'] = "Connections";
PMA_messages['strProcesses'] = "Processes";
PMA_messages['strB'] = "B";
PMA_messages['strKiB'] = "KiB";
PMA_messages['strMiB'] = "MiB";
PMA_messages['strGiB'] = "GiB";
PMA_messages['strTiB'] = "TiB";
PMA_messages['strPiB'] = "PiB";
PMA_messages['strEiB'] = "EiB";
PMA_messages['strNTables'] = "%d table(s)";
PMA_messages['strQuestions'] = "Questions";
PMA_messages['strTraffic'] = "Traffic";
PMA_messages['strSettings'] = "Settings";
PMA_messages['strAddChart'] = "Add chart to grid";
PMA_messages['strAddOneSeriesWarning'] = "Please add at least one variable to the series!";
PMA_messages['strNone'] = "None";
PMA_messages['strResumeMonitor'] = "Resume monitor";
PMA_messages['strPauseMonitor'] = "Pause monitor";
PMA_messages['strStartRefresh'] = "Start auto refresh";
PMA_messages['strStopRefresh'] = "Stop auto refresh";
PMA_messages['strBothLogOn'] = "general_log and slow_query_log are enabled.";
PMA_messages['strGenLogOn'] = "general_log is enabled.";
PMA_messages['strSlowLogOn'] = "slow_query_log is enabled.";
PMA_messages['strBothLogOff'] = "slow_query_log and general_log are disabled.";
PMA_messages['strLogOutNotTable'] = "log_output is not set to TABLE.";
PMA_messages['strLogOutIsTable'] = "log_output is set to TABLE.";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "slow_query_log is enabled, but the server logs only queries that take longer than %d seconds. It is advisable to set this long_query_time 0-2 seconds, depending on your system.";
PMA_messages['strLongQueryTimeSet'] = "long_query_time is set to %d second(s).";
PMA_messages['strSettingsAppliedGlobal'] = "Following settings will be applied globally and reset to default on server restart:";
PMA_messages['strSetLogOutput'] = "Set log_output to %s";
PMA_messages['strEnableVar'] = "Enable %s";
PMA_messages['strDisableVar'] = "Disable %s";
PMA_messages['setSetLongQueryTime'] = "Set long_query_time to %d seconds.";
PMA_messages['strNoSuperUser'] = "You can\'t change these variables. Please log in as root or contact your database administrator.";
PMA_messages['strChangeSettings'] = "Change settings";
PMA_messages['strCurrentSettings'] = "Current settings";
PMA_messages['strChartTitle'] = "Chart title";
PMA_messages['strDifferential'] = "Differential";
PMA_messages['strDividedBy'] = "Divided by %s";
PMA_messages['strUnit'] = "Unit";
PMA_messages['strFromSlowLog'] = "From slow log";
PMA_messages['strFromGeneralLog'] = "From general log";
PMA_messages['strServerLogError'] = "The database name is not known for this query in the server\'s logs.";
PMA_messages['strAnalysingLogsTitle'] = "Analysing logs";
PMA_messages['strAnalysingLogs'] = "Analysing & loading logs. This may take a while.";
PMA_messages['strCancelRequest'] = "Cancel request";
PMA_messages['strCountColumnExplanation'] = "This column shows the amount of identical queries that are grouped together. However only the SQL query itself has been used as a grouping criteria, so the other attributes of queries, such as start time, may differ.";
PMA_messages['strMoreCountColumnExplanation'] = "Since grouping of INSERTs queries has been selected, INSERT queries into the same table are also being grouped together, disregarding of the inserted data.";
PMA_messages['strLogDataLoaded'] = "Log data loaded. Queries executed in this time span:";
PMA_messages['strJumpToTable'] = "Jump to Log table";
PMA_messages['strNoDataFoundTitle'] = "No data found";
PMA_messages['strNoDataFound'] = "Log analysed, but no data found in this time span.";
PMA_messages['strAnalyzing'] = "Analyzing…";
PMA_messages['strExplainOutput'] = "Explain output";
PMA_messages['strStatus'] = "Status";
PMA_messages['strTime'] = "Time";
PMA_messages['strTotalTime'] = "Total time:";
PMA_messages['strProfilingResults'] = "Profiling results";
PMA_messages['strTable'] = "Table";
PMA_messages['strChart'] = "Chart";
PMA_messages['strFiltersForLogTable'] = "Log table filter options";
PMA_messages['strFilter'] = "Filter";
PMA_messages['strFilterByWordRegexp'] = "Filter queries by word/regexp:";
PMA_messages['strIgnoreWhereAndGroup'] = "Group queries, ignoring variable data in WHERE clauses";
PMA_messages['strSumRows'] = "Sum of grouped rows:";
PMA_messages['strTotal'] = "Total:";
PMA_messages['strLoadingLogs'] = "Loading logs";
PMA_messages['strRefreshFailed'] = "Monitor refresh failed";
PMA_messages['strInvalidResponseExplanation'] = "While requesting new chart data the server returned an invalid response. This is most likely because your session expired. Reloading the page and reentering your credentials should help.";
PMA_messages['strReloadPage'] = "Reload page";
PMA_messages['strAffectedRows'] = "Affected rows:";
PMA_messages['strFailedParsingConfig'] = "Failed parsing config file. It doesn\'t seem to be valid JSON code.";
PMA_messages['strFailedBuildingGrid'] = "Failed building chart grid with imported config. Resetting to default config…";
PMA_messages['strImport'] = "Import";
PMA_messages['strImportDialogTitle'] = "Import monitor configuration";
PMA_messages['strImportDialogMessage'] = "Please select the file you want to import.";
PMA_messages['strNoImportFile'] = "No files available on server for import!";
PMA_messages['strAnalyzeQuery'] = "Analyse query";
PMA_messages['strAdvisorSystem'] = "Advisor system";
PMA_messages['strPerformanceIssues'] = "Possible performance issues";
PMA_messages['strIssuse'] = "Issue";
PMA_messages['strRecommendation'] = "Recommendation";
PMA_messages['strRuleDetails'] = "Rule details";
PMA_messages['strJustification'] = "Justification";
PMA_messages['strFormula'] = "Used variable / formula";
PMA_messages['strTest'] = "Test";
PMA_messages['strFormatting'] = "Formatting SQL…";
PMA_messages['strNoParam'] = "No parameters found!";
PMA_messages['strGo'] = "Go";
PMA_messages['strCancel'] = "Cancel";
PMA_messages['strPageSettings'] = "Page-related settings";
PMA_messages['strApply'] = "Apply";
PMA_messages['strLoading'] = "Loading…";
PMA_messages['strAbortedRequest'] = "Request aborted!!";
PMA_messages['strProcessingRequest'] = "Processing request";
PMA_messages['strRequestFailed'] = "Request failed!!";
PMA_messages['strErrorProcessingRequest'] = "Error in processing request";
PMA_messages['strErrorCode'] = "Error code: %s";
PMA_messages['strErrorText'] = "Error text: %s";
PMA_messages['strNoDatabasesSelected'] = "No databases selected.";
PMA_messages['strDroppingColumn'] = "Dropping column";
PMA_messages['strAddingPrimaryKey'] = "Adding primary key";
PMA_messages['strOK'] = "OK";
PMA_messages['strDismiss'] = "Click to dismiss this notification";
PMA_messages['strRenamingDatabases'] = "Renaming databases";
PMA_messages['strCopyingDatabase'] = "Copying database";
PMA_messages['strChangingCharset'] = "Changing charset";
PMA_messages['strNo'] = "No";
PMA_messages['strForeignKeyCheck'] = "Enable foreign key checks";
PMA_messages['strErrorRealRowCount'] = "Failed to get real row count.";
PMA_messages['strSearching'] = "Searching";
PMA_messages['strHideSearchResults'] = "Hide search results";
PMA_messages['strShowSearchResults'] = "Show search results";
PMA_messages['strBrowsing'] = "Browsing";
PMA_messages['strDeleting'] = "Deleting";
PMA_messages['MissingReturn'] = "The definition of a stored function must contain a RETURN statement!";
PMA_messages['strExport'] = "Export";
PMA_messages['enum_editor'] = "ENUM/SET editor";
PMA_messages['enum_columnVals'] = "Values for column %s";
PMA_messages['enum_newColumnVals'] = "Values for a new column";
PMA_messages['enum_hint'] = "Enter each value in a separate field.";
PMA_messages['enum_addValue'] = "Add %d value(s)";
PMA_messages['strImportCSV'] = "Note: If the file contains multiple tables, they will be combined into one.";
PMA_messages['strHideQueryBox'] = "Hide query box";
PMA_messages['strShowQueryBox'] = "Show query box";
PMA_messages['strEdit'] = "Edit";
PMA_messages['strDelete'] = "Delete";
PMA_messages['strNotValidRowNumber'] = "%d is not valid row number.";
PMA_messages['strBrowseForeignValues'] = "Browse foreign values";
PMA_messages['strNoAutoSavedQuery'] = "No auto-saved query";
PMA_messages['strBookmarkVariable'] = "Variable %d:";
PMA_messages['pickColumn'] = "Pick";
PMA_messages['pickColumnTitle'] = "Column selector";
PMA_messages['searchList'] = "Search this list";
PMA_messages['strEmptyCentralList'] = "No columns in the central list. Make sure the Central columns list for database %s has columns that are not present in the current table.";
PMA_messages['seeMore'] = "See more";
PMA_messages['confirmTitle'] = "Are you sure?";
PMA_messages['makeConsistentMessage'] = "This action may change some of the columns definition.<br/>Are you sure you want to continue?";
PMA_messages['strContinue'] = "Continue";
PMA_messages['strAddPrimaryKey'] = "Add primary key";
PMA_messages['strPrimaryKeyAdded'] = "Primary key added.";
PMA_messages['strToNextStep'] = "Taking you to next step…";
PMA_messages['strFinishMsg'] = "The first step of normalization is complete for table \'%s\'.";
PMA_messages['strEndStep'] = "End of step";
PMA_messages['str2NFNormalization'] = "Second step of normalization (2NF)";
PMA_messages['strDone'] = "Done";
PMA_messages['strConfirmPd'] = "Confirm partial dependencies";
PMA_messages['strSelectedPd'] = "Selected partial dependencies are as follows:";
PMA_messages['strPdHintNote'] = "Note: a, b -> d,f implies values of columns a and b combined together can determine values of column d and column f.";
PMA_messages['strNoPdSelected'] = "No partial dependencies selected!";
PMA_messages['strBack'] = "Back";
PMA_messages['strShowPossiblePd'] = "Show me the possible partial dependencies based on data in the table";
PMA_messages['strHidePd'] = "Hide partial dependencies list";
PMA_messages['strWaitForPd'] = "Sit tight! It may take few seconds depending on data size and column count of the table.";
PMA_messages['strStep'] = "Step";
PMA_messages['strMoveRepeatingGroup'] = "<ol><b>The following actions will be performed:</b><li>DROP columns %s from the table %s</li><li>Create the following table</li>";
PMA_messages['strNewTablePlaceholder'] = "Enter new table name";
PMA_messages['strNewColumnPlaceholder'] = "Enter column name";
PMA_messages['str3NFNormalization'] = "Third step of normalization (3NF)";
PMA_messages['strConfirmTd'] = "Confirm transitive dependencies";
PMA_messages['strSelectedTd'] = "Selected dependencies are as follows:";
PMA_messages['strNoTdSelected'] = "No dependencies selected!";
PMA_messages['strSave'] = "Save";
PMA_messages['strHideSearchCriteria'] = "Hide search criteria";
PMA_messages['strShowSearchCriteria'] = "Show search criteria";
PMA_messages['strRangeSearch'] = "Range search";
PMA_messages['strColumnMax'] = "Column maximum:";
PMA_messages['strColumnMin'] = "Column minimum:";
PMA_messages['strMinValue'] = "Minimum value:";
PMA_messages['strMaxValue'] = "Maximum value:";
PMA_messages['strHideFindNReplaceCriteria'] = "Hide find and replace criteria";
PMA_messages['strShowFindNReplaceCriteria'] = "Show find and replace criteria";
PMA_messages['strDisplayHelp'] = "<ul><li>Each point represents a data row.</li><li>Hovering over a point will show its label.</li><li>To zoom in, select a section of the plot with the mouse.</li><li>Click reset zoom button to come back to original state.</li><li>Click a data point to view and possibly edit the data row.</li><li>The plot can be resized by dragging it along the bottom right corner.</li></ul>";
PMA_messages['strHelpTitle'] = "Zoom search instructions";
PMA_messages['strInputNull'] = "<strong>Select two columns</strong>";
PMA_messages['strSameInputs'] = "<strong>Select two different columns</strong>";
PMA_messages['strDataPointContent'] = "Data point content";
PMA_messages['strIgnore'] = "Ignore";
PMA_messages['strCopy'] = "Copy";
PMA_messages['strX'] = "X";
PMA_messages['strY'] = "Y";
PMA_messages['strPoint'] = "Point";
PMA_messages['strPointN'] = "Point %d";
PMA_messages['strLineString'] = "Linestring";
PMA_messages['strPolygon'] = "Polygon";
PMA_messages['strGeometry'] = "Geometry";
PMA_messages['strInnerRing'] = "Inner ring";
PMA_messages['strOuterRing'] = "Outer ring";
PMA_messages['strAddPoint'] = "Add a point";
PMA_messages['strAddInnerRing'] = "Add an inner ring";
PMA_messages['strYes'] = "Yes";
PMA_messages['strCopyEncryptionKey'] = "Do you want to copy encryption key?";
PMA_messages['strEncryptionKey'] = "Encryption key";
PMA_messages['strLockToolTip'] = "Indicates that you have made changes to this page; you will be prompted for confirmation before abandoning changes";
PMA_messages['strSelectReferencedKey'] = "Select referenced key";
PMA_messages['strSelectForeignKey'] = "Select Foreign Key";
PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "Please select the primary key or a unique key!";
PMA_messages['strChangeDisplay'] = "Choose column to display";
PMA_messages['strLeavingDesigner'] = "You haven\'t saved the changes in the layout. They will be lost if you don\'t save them. Do you want to continue?";
PMA_messages['strPageName'] = "Page name";
PMA_messages['strSavePage'] = "Save page";
PMA_messages['strSavePageAs'] = "Save page as";
PMA_messages['strOpenPage'] = "Open page";
PMA_messages['strDeletePage'] = "Delete page";
PMA_messages['strUntitled'] = "Untitled";
PMA_messages['strSelectPage'] = "Please select a page to continue";
PMA_messages['strEnterValidPageName'] = "Please enter a valid page name";
PMA_messages['strLeavingPage'] = "Do you want to save the changes to the current page?";
PMA_messages['strSuccessfulPageDelete'] = "Successfully deleted the page";
PMA_messages['strExportRelationalSchema'] = "Export relational schema";
PMA_messages['strModificationSaved'] = "Modifications have been saved";
PMA_messages['strAddOption'] = "Add an option for column \"%s\".";
PMA_messages['strObjectsCreated'] = "%d object(s) created.";
PMA_messages['strSubmit'] = "Submit";
PMA_messages['strCellEditHint'] = "Press escape to cancel editing.";
PMA_messages['strSaveCellWarning'] = "You have edited some data and they have not been saved. Are you sure you want to leave this page before saving the data?";
PMA_messages['strColOrderHint'] = "Drag to reorder.";
PMA_messages['strSortHint'] = "Click to sort results by this column.";
PMA_messages['strMultiSortHint'] = "Shift+Click to add this column to ORDER BY clause or to toggle ASC/DESC.<br />- Ctrl+Click or Alt+Click (Mac: Shift+Option+Click) to remove column from ORDER BY clause";
PMA_messages['strColMarkHint'] = "Click to mark/unmark.";
PMA_messages['strColNameCopyHint'] = "Double-click to copy column name.";
PMA_messages['strColVisibHint'] = "Click the drop-down arrow<br />to toggle column\'s visibility.";
PMA_messages['strShowAllCol'] = "Show all";
PMA_messages['strAlertNonUnique'] = "This table does not contain a unique column. Features related to the grid edit, checkbox, Edit, Copy and Delete links may not work after saving.";
PMA_messages['strEnterValidHex'] = "Please enter a valid hexadecimal string. Valid characters are 0-9, A-F.";
PMA_messages['strShowAllRowsWarning'] = "Do you really want to see all of the rows? For a big table this could crash the browser.";
PMA_messages['strOriginalLength'] = "Original length";
PMA_messages['dropImportMessageCancel'] = "cancel";
PMA_messages['dropImportMessageAborted'] = "Aborted";
PMA_messages['dropImportMessageFailed'] = "Failed";
PMA_messages['dropImportMessageSuccess'] = "Success";
PMA_messages['dropImportImportResultHeader'] = "Import status";
PMA_messages['dropImportDropFiles'] = "Drop files here";
PMA_messages['dropImportSelectDB'] = "Select database first";
PMA_messages['print'] = "Print";
PMA_messages['back'] = "Back";
PMA_messages['strGridEditFeatureHint'] = "You can also edit most values<br />by double-clicking directly on them.";
PMA_messages['strGoToLink'] = "Go to link:";
PMA_messages['strColNameCopyTitle'] = "Copy column name.";
PMA_messages['strColNameCopyText'] = "Right-click the column name to copy it to your clipboard.";
PMA_messages['strGeneratePassword'] = "Generate password";
PMA_messages['strGenerate'] = "Generate";
PMA_messages['strChangePassword'] = "Change password";
PMA_messages['strMore'] = "More";
PMA_messages['strShowPanel'] = "Show panel";
PMA_messages['strHidePanel'] = "Hide panel";
PMA_messages['strUnhideNavItem'] = "Show hidden navigation tree items.";
PMA_messages['linkWithMain'] = "Link with main panel";
PMA_messages['unlinkWithMain'] = "Unlink from main panel";
PMA_messages['strInvalidPage'] = "The requested page was not found in the history, it may have expired.";
PMA_messages['strNewerVersion'] = "A newer version of phpMyAdmin is available and you should consider upgrading. The newest version is %s, released on %s.";
PMA_messages['strLatestAvailable'] = ", latest stable version:";
PMA_messages['strUpToDate'] = "up to date";
PMA_messages['strCreateView'] = "Create view";
PMA_messages['strSendErrorReport'] = "Send error report";
PMA_messages['strSubmitErrorReport'] = "Submit error report";
PMA_messages['strErrorOccurred'] = "A fatal JavaScript error has occurred. Would you like to send an error report?";
PMA_messages['strChangeReportSettings'] = "Change report settings";
PMA_messages['strShowReportDetails'] = "Show report details";
PMA_messages['strTimeOutError'] = "Your export is incomplete, due to a low execution time limit at the PHP level!";
PMA_messages['strTooManyInputs'] = "Warning: a form on this page has more than %d fields. On submission, some of the fields might be ignored, due to PHP\'s max_input_vars configuration.";
PMA_messages['phpErrorsFound'] = "<div class=\"error\">Some errors have been detected on the server!<br/>Please look at the bottom of this window.<div><input id=\"pma_ignore_errors_popup\" type=\"submit\" value=\"Ignore\" class=\"floatright\" style=\"margin-top: 20px;\"><input id=\"pma_ignore_all_errors_popup\" type=\"submit\" value=\"Ignore All\" class=\"floatright\" style=\"margin-top: 20px;\"></div></div>";
PMA_messages['phpErrorsBeingSubmitted'] = "<div class=\"error\">Some errors have been detected on the server!<br/>As per your settings, they are being submitted currently, please be patient.<br/><img src=\"./themes/pmahomme/img/ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\"/></div>";
PMA_messages['strConsoleRequeryConfirm'] = "Execute this query again?";
PMA_messages['strConsoleDeleteBookmarkConfirm'] = "Do you really want to delete this bookmark?";
PMA_messages['strConsoleDebugError'] = "Some error occurred while getting SQL debug info.";
PMA_messages['strConsoleDebugSummary'] = "%s queries executed %s times in %s seconds.";
PMA_messages['strConsoleDebugArgsSummary'] = "%s argument(s) passed";
PMA_messages['strConsoleDebugShowArgs'] = "Show arguments";
PMA_messages['strConsoleDebugHideArgs'] = "Hide arguments";
PMA_messages['strConsoleDebugTimeTaken'] = "Time taken:";
PMA_messages['strNoLocalStorage'] = "There was a problem accessing your browser storage, some features may not work properly for you. It is likely that the browser doesn\'t support storage or the quota limit has been reached. In Firefox, corrupted storage can also cause such a problem, clearing your \"Offline Website Data\" might help. In Safari, such problem is commonly caused by \"Private Mode Browsing\".";
PMA_messages['strCopyTablesTo'] = "Copy tables to";
PMA_messages['strAddPrefix'] = "Add table prefix";
PMA_messages['strReplacePrefix'] = "Replace table with prefix";
PMA_messages['strCopyPrefix'] = "Copy table with prefix";
var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
var pmaThemeImage = './themes/pmahomme/img/';
var mysql_doc_template = './url.php?url=http%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2F%25s.html';
var maxInputVars = 1000;
if ($.datepicker) {
$.datepicker.regional['']['closeText'] = "Done";
$.datepicker.regional['']['prevText'] = "Prev";
$.datepicker.regional['']['nextText'] = "Next";
$.datepicker.regional['']['currentText'] = "Today";
$.datepicker.regional['']['monthNames'] = ["January","February","March","April","May","June","July","August","September","October","November","December",];
$.datepicker.regional['']['monthNamesShort'] = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",];
$.datepicker.regional['']['dayNames'] = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday",];
$.datepicker.regional['']['dayNamesShort'] = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat",];
$.datepicker.regional['']['dayNamesMin'] = ["Su","Mo","Tu","We","Th","Fr","Sa",];
$.datepicker.regional['']['weekHeader'] = "Wk";
$.datepicker.regional['']['showMonthAfterYear'] = false;
$.datepicker.regional['']['yearSuffix'] = "";
$.extend($.datepicker._defaults, $.datepicker.regional['']);
} /* if ($.datepicker) */

if ($.timepicker) {
$.timepicker.regional['']['timeText'] = "Time";
$.timepicker.regional['']['hourText'] = "Hour";
$.timepicker.regional['']['minuteText'] = "Minute";
$.timepicker.regional['']['secondText'] = "Second";
$.extend($.timepicker._defaults, $.timepicker.regional['']);
} /* if ($.timepicker) */

function extendingValidatorMessages() {
$.extend($.validator.messages, {
required: "This field is required", remote: "Please fix this field", email: "Please enter a valid email address", url: "Please enter a valid URL", date: "Please enter a valid date", dateISO: "Please enter a valid date ( ISO )", number: "Please enter a valid number", creditcard: "Please enter a valid credit card number", digits: "Please enter only digits", equalTo: "Please enter the same value again", maxlength: $.validator.format("Please enter no more than {0} characters"), minlength: $.validator.format("Please enter at least {0} characters"), rangelength: $.validator.format("Please enter a value between {0} and {1} characters long"), range: $.validator.format("Please enter a value between {0} and {1}"), max: $.validator.format("Please enter a value less than or equal to {0}"), min: $.validator.format("Please enter a value greater than or equal to {0}"), validationFunctionForDateTime: $.validator.format("Please enter a valid date or time"), validationFunctionForHex: $.validator.format("Please enter a valid HEX input"), validationFunctionForFuns: $.validator.format("Error")
});
} /* if ($.validator) */