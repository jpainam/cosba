<?php

	/*
	|| #################################################################### ||
	|| #                             ArrowChat                            # ||
	|| # ---------------------------------------------------------------- # ||
	|| #     Copyright 2010-2012 ArrowSuites LLC. All Rights Reserved.    # ||
	|| # This file may not be redistributed in whole or significant part. # ||
	|| # ---------------- ARROWCHAT IS NOT FREE SOFTWARE ---------------- # ||
	|| #   http://www.arrowchat.com | http://www.arrowchat.com/license/   # ||
	|| #################################################################### ||
	*/

	$language = array();

	// ########################### STATUS #############################
	$language[1]			=	"Disponible";								// Available users
	$language[2]			=	"Occupé";										// Busy users
	$language[3]			=	"Invisible";								// Invisible users
	$status['available']	=	"Je suis disponible";							// Default available status message
	$status['busy']			=	"Je suis occupé";									// Default busy status message
	$status['away']			=	"I'm idle";									// Default idle status message
	$status['offline']		=	"I'm offline";								// Default offline status message
	$status['invisible']	=	"I'm offline";								// Default invisible status message
	$language[83]			=	"Guest";									// Displayed if the user has no username

	// ####################### SERVICE UPDATES ########################
	$language[27]			=	"Chat is currently down for maintenance.";  // Hover message when chat is in maintenance mode
	$language[28]			=	"close"; 									// Close the announcement message
	$language[58]			=	"You must register or login to use chat.";	// The message that guests view when logged out

	// ######################## NOTIFICATIONS #########################
	$language[0]			=	"Notifications"; 							// Displayed in the title bar of the notifications popup
	$language[9]   			=   "You have no new notifications."; 			// Displayed when a user has no new notifications
	$language[21]			=	"See all notifications"; 					// The tooltip to see all notifications
	$language[71]			=	"second ago";								// Displayed after the time in notifications (second)
	$language[72]			=	"seconds ago";								// Displayed after the time in notifications (seconds)
	$language[73]			=	"minute ago";								// Displayed after the time in notifications (minute)
	$language[74]			=	"minutes ago";								// Displayed after the time in notifications (minutes)
	$language[75]			=	"hour ago";									// Displayed after the time in notifications (hour)
	$language[76]			=	"hours ago";								// Displayed after the time in notifications (hours)
	$language[77]			=	"day ago";									// Displayed after the time in notifications (day)
	$language[78]			=	"days ago";									// Displayed after the time in notifications (days)
	$language[79]			=	"month ago";								// Displayed after the time in notifications (month)
	$language[80]			=	"months ago";								// Displayed after the time in notifications (months)
	$language[81]			=	"year ago";									// Displayed after the time in notifications (year)
	$language[82]			=	"years ago";								// Displayed after the time in notifications (years)
	$language[144]			=	"New message from ";						// DISPLAYS USERNAME AFTER - The title for HTML5 notifications

	// ######################### BUDDY LIST ###########################
	$language[4]			=	"Chat"; 									// Displayed in the title bar of the buddy list popup
	$language[7]			=	"Chat (Offline)"; 							// Displayed in the buddy list tab when offline
	$language[8]    		=   "No one is available to chat."; 			// Displayed with no one is online
	$language[12]   		=   "Search"; 									// Displayed in the search text area of the buddy list
	$language[22]			=	"Status";									// Button to show status options in the buddy list
	$language[23]			=	"Options";									// Button to show options in the buddy list
	$language[25]			=	"";											// Text to show while the buddy list is loading (Must remove CSS background image too)
	$language[26]			=	"No friends found.";						// Displayed when no friends are found after searching
	$language[119]			=	"Enter a name to chat with";				// Displayed in the guest username box
	$language[120]			=	"You must enter a name.";					// Error message when the user enters no guest name
	$language[121]			=	"The name can only consist of letters and numbers.";	// Error message when the user enters a guest name with more than letter/numbers
	$language[122]			=	"There is a blocked word in your name: ";	// DISPLAYS BLOCKED WORD AFTER - Error message when the user enters a blocked word guest name
	$language[123]			=	"You cannot change your name again.";		// Error message when user trys to change guest name again
	$language[124]			=	"That name already exists.";				// Error message when duplicate guest name is selected
	$language[125]			=	"The name cannot be more than 25 characters.";// Error message when guest name is too long
	$language[140]			=	"Connect to Facebook";						// Text to connect to Facebook
	$language[141]			=	"Logout from Facebook";						// Text to logout from Facebook
	$language[142]			=	"Site Users";								// Text to display for site user's group
	$language[143]			=	"Facebook Friends";							// Text to display for facebook friend's group

	// ########################### OPTIONS ############################
	$language[5]			=	"Disponible";						// Option to go offline text
	$language[6]			=	"Sonnerie chat";								// Option to play sound for new messages text
	$language[17]   		=   "Keep List Open";							// Option to keep the buddy list open text
	$language[18]   		=   "Show Names Only";							// Option to hide avatars in the buddy list text
	$language[29]			=	"Thême:";									// Text to display next to the theme change select box
	$language[95]			=	"Manage Block List...";						// Option to manage the block list
	$language[96]			=	"Select the user you wish to unblock";		// Text to display when a user is managing the block list
	$language[97]			=	"Unblock";									// Text to display on unblock button
	$language[108]			=	"Selectionner le thême";			// Text to display when a user is choosing a theme
	$language[109]			=	"Choisir";									// Text to display on the choose theme button
	$language[118]			=	"Select";									// Text to display on the selection for the block menu

	// ######################## APPLICATIONS ##########################
	$language[16]  		 	=   "Applications";								// Displayed in the title bar of the applications popup
	$language[20]			=	"Bookmarks";								// Displayed in the applications popup for the user's bookmarked applications
	$language[64]			=	"Other Applications";						// Displayed under bookmarks (non-bookmarks heading)
	$language[65]			=	"Drag to reorder";							// Drag to reorder text
	$language[104]			=	"Keep App Open";							// Displayed in the menu to keep an app window open
	$language[105]			=	"Always Load App";							// Displayed in the menu to load the app when the bar loads

	// ######################### HIDE CHAT ############################
	$language[14]   		=   "Hide Chat";								// Displayed when the user hovers over the hide chat button
	$language[15]   		=   "Show Chat";								// Displayed when the user hovers over the show chat button

	// ######################## POPOUT CHAT ############################
	$language[10]   		=   "Pop Out Chat";								// Option to pop out chat
	$language[11]   		=   "Pop In Chat";								// Option to pop in chat

	// ############################ CHAT ###############################
	$language[13]  	 		=   "This user is offline. They will receive the message next login";		// DISPLAYS USERNAME FIRST - Shown when a message is sent to an offline user
	$language[24]			=	"Effacer l'historique";													// Displayed in the chat popup to clear chat history
	$language[30]			=	"Nouveau message de";														// DISPLAYS USERNAME AFTER - Blinks in the title of the browser on new messages
	$language[59]			=	"More &#9660;";															// The text to display more chat options
	$language[60]			=	"Pop-Out";															// The pop out chat option in the more menu
	$language[61]			=	"Vous avez reçu une invitation pour Vidéo Chat. Ignorez ce message pour annuler.";// The message to send when a video chat is reuqested
	$language[62]			=	"Accepter";																// Accept a video chat request
	$language[63]			=	"Your video chat request has been sent.";								// Displayed when a user sends a video chat request
	$language[66]			=	"Transfert de fichiers...";															// The file transfer option in the more menu
	$language[67]			=	"Annuler";													// The link to cancel the file transfer
	$language[68]			=	"Your file has been uploaded and sent.";								// Displayed when a user sends a file
	$language[69]			=	"Fichier envoyé";															// The message to send when a file is sent
	$language[70]			=	"Télécharger le fichier";														// Download a file that was sent
	$language[84]			=	"Bloquer l'utilisateur";															// Blocks a user
	$language[85]			=	"Would you also like to report this user?";								// Asks the user if they want to report another user
	$language[86]			=	"Browse";																// The text to browse for a file when uploading
	$language[87]			=	"Cliquer sur 'Browse' ou ";										// Text to display when uploading a file
	$language[88]			=	"Start a video call";													// Displays when mouseover the video chat icon
	$language[89]			=	"Fermer chat";															// Displays when mouserver the close icon
	$language[90]			=	"Vous";																	// Displays on mosueover of your own chat text
	$language[102]			=	"Message non envoyé. cet utilisateur vous a bloqué.";						// Displays this when a user tries to send a message to another user who has them blocked
	$language[103]			=	"The user has been blocked. Messages by the user will no longer be received."; // Displays when a user is blocked
	$language[134]			=	"Scroll down to see new messages.";										// Displays when a chat window is not scrolled down on a new message
	$language[135]			=	"There was an error sending your message. Try again later.";			// Error message when a message fails to send
	$language[146]			=	"Video calling is currently unavailable";								// Displays when mouseover the video chat icon and user is offline
	$language[151]			=	"There was an error uploading the file.";								// File upload error message

	// ######################### CHAT ROOMS #############################
	$language[19]			=	"Chat Rooms";								// Displayed in the chatrooms popup and tab
	$language[31]			=	"Créer";									// Button to show create chatroom
	$language[32]			=	"Options";									// Button to show chatroom options
	$language[33]			=	"Quitter";									// Button to show leave chatroom
	$language[34]			=	"";											// Text so show while the chatroom list is loading (Must remove CSS background image too)
	$language[35]			=	" En ligne";									// DISPLAYS ONLINE COUNT FIRST - Shown after online count in list
	$language[37]			=	"Create a new chat room:";					// Text to display in the create chatroom popup
	$language[36]   		=   "Keep Room Open";							// Option to keep the chatroom window open
	$language[47]			=	"Stay in Room";								// Option to stay in the chatroom without the window open on page load
	$language[38]			=	"Block Private Chats";						// Option to block private chats from users in the chatroom
	$language[39]			=	"You must wait more time before creating another chatroom.";	// Error to show when the chatroom flood limit is reached
	$language[40]			=	"User created chat rooms are currently disabled.";				// Error to show when user chatrooms are disabled
	$language[41]			=	"Private Message";							// Send user a private messages
	$language[42]			=	"Visit Profile";							// Visit the user's profile
	$language[43]			=	"Guest";									// The user's title in the chatroom - shown when the user is a guest
	$language[44]			=	"Moderator";								// The user's title in the chatroom - shown when the user is a moderator
	$language[45]			=	"Administrator";							// The user's title in the chatroom - shown when the user is an administrator
	$language[46]			= 	"This user has private messaging disabled"; // The text that the alert box will display when a user trys to PM with blocked chat
	$language[48]			=	"That chat room does not exist.";			// Displayed when a user trys to enter an invalid chatroom
	$language[49]			=	"The password entered was incorrect. Please try again.";		// Displayed when a user enters the wrong password
	$language[50]			=	"Enter the password for this chat room.";						// Text to display when entering the chatroom password
	$language[51]			=	"Limit Reached: You must wait more time before sending another message.";	// Error to show when flood limit is reached
	$language[52]			=	"Make Moderator";							// Make the user a moderator
	$language[54]			=	"Remove Moderator";							// Remove the user from being a moderator
	$language[53]			=	"Kick User";								// Ban/Kick the user from the chatroom
	$language[55]			=	"You are banned from this chat room permanently.";					// Shown when a user is permanently banned
	$language[56]			=	"You are banned from this chat room for this many minutes: ";		// DISPLAYS MINUTES AFTER - shown when a user is kicked
	$language[57]			=	"Enter the number in minutes that the user should be banned for.  Enter 0 for a permanent ban.";	// Message to show when banning a user.  Typing 0 will permanently ban the user
	$language[91]			=	"Enter the name of the chat room you'd like to create.";		// Message to display when creating a chat room
	$language[92]			=	"Leave Chat Room";							// Tooltip when mousover the leave chat room icon
	$language[93]			=	"Create a new chat room";					// Tooltip when mouseover the create chat room icon
	$language[94]			=	"Changer le thême";					// Tooltip when mouseover the change theme icon
	$language[98]			=	"Name";										// Placeholder for the create chatroom name box
	$language[99]			=	"Password (Optional)";						// Placeholder for the create chatroom password box
	$language[100]			=	"Join";										// Displayed on UI buttons to join a chat room
	$language[101]			=	"Chat Room Sounds";							// The option to enable/disable chat room sounds
	$language[106]			=	" has been made a moderator by ";			// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is made a moderator
	$language[107]			=	" has been kicked from the chat room by ";	// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is kicked
	$language[117]			=	"Popout chat room";							// Option to pop out the chat room
	$language[127]			=	"There are too many users in this chat room.  Please try again later.";	// Displayed when a user tries to enter a chat room with too many online.
	$language[136]			=	" (Admin)";									// Will display after a username when an administrator
	$language[137]			=	" (Mod)";									// Will display after a username when a moderator
	$language[147]			=	"Users";									// Text to display for chat room's user group
	$language[148]			=	"Admins";									// Text to display for chat room's admin group
	$language[149]			=	"Mods";										// Text to display for chat room's mod group
	$language[150]			=	"User-created chat room";					// Text for chat rooms that have no description entered
	$language[152]			=	"Always Show Names";						// Option to always show names in a chat room
	$language[153]			=	"Edit Welcome Message...";					// Option to edit the welcome message
	$language[154]			=	"Enter the welcome message that you would like to be displayed when users enter this chat room. Enter a blank value for no welcome message.";	// Prompt for the mod/admin to edit the welcome message
	$language[155]			=	"The settings have been successfully saved.";	// Notice when an admin or mod saves settings
	$language[156]			=	" has had their moderator status taken away by ";	// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is made a moderator
	$language[157]			=	"Edit Description...";						// Option to edit the description
	$language[158]			=	"Enter the description that you would like to be displayed in the chat room list.";	// Prompt for the mod/admin to edit the description
	$language[159]			=	"Message deleted by ";						// DISPLAYS USERNAME AFTER - Shown when a chat room message is deleted in replacement of the message
	$language[160]			=	"Delete Message";							// Tooltip to show on the delete message icon
	$language[161]			=	"Silence User";								// Option to silence a user
	$language[162]			=	"Enter the number in seconds that the user should be silenced for.  Maximum time is 300 seconds.";	// Message to show when silencing a user
	$language[163]			=	" has been silenced by ";					// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is silenced
	$language[164]			=	"You are silenced for another ";			// DISPLAYS SECONDS AFTER - The first half of the user is silenced error message.
	$language[165]			=	" seconds.";								// DISPLAYS SECONDS BEFORE - The second half of the user is silenced error message.
	$language[169]			=	"You have exceeded the flood limit and must wait ";	// DISPLAYS SECONDS AFTER - The first half of the flood message
	$language[170]			=	" more seconds to chat.";					// DISPLAYS SECONDS BEFORE - The second half of the flood message
	$language[171]			=	"Edit Chat Flood...";						//	Option to change the chat room flood limits
	$language[172]			=	"Select your chat flood settings";			// Text to display in the flood menu
	$language[173]			=	"Save";										// Button text for the flood menu save
	$language[174]			=	"message(s) every";							// In between the flood message and time
	$language[175]			=	"second(s)";								// After the flood time
	
	// ########################## MODERATORS #############################
	$language[166]			=	"Moderation";								// Displayed in the moderators popup and tab
	$language[167]			=	"Report Spam/Abuse";						// Option in 1-on-1 chat settings to report a person
	$language[168]			=	"Thank you for your report.";				// Message after a report is filed
	$language[177]			=	"Report From";								// Header for the reports from column
	$language[178]			=	"Report About";								// Header for the reports about column
	$language[179]			=	"Report Time";								// Header for the reports time column
	$language[180]			=	"Total Reports";							// DISPLAYS # OF REPORTS FIRST - Used in the title to show total number of reports
	$language[181]			=	"Reports On User";							// The header for the reports list
	$language[182]			=	"Someone else is already working on this report.";	// Error message when a report is already being worked on
	$language[183]			=	"Ban User";									// Option to ban the user
	$language[184]			=	"Warn User";								// Option to warn the user
	$language[185]			=	"Close Report";								// Option to close the report
	$language[186]			=	"Back to Lobby";							// Option to go back to the reports list
	$language[187]			=	"Report #";									// DISPLAYS REPORT NUMBER AFTER - shown in the reports on user list
	$language[188]			=	"No additional reports";				 	// Displays when no other reports are available
	$language[189]			=	"There are no reports, hooray!";			// Displays in the lobby when there are no reports
	$language[190]			=	"About: ";									// DISPLAYS ABOUT USER AFTER - The pretext for the user the report is about
	$language[191]			=	"From: ";									// DISPLAYS FROM USER AFTER - The pretext for the user the report is from
	$language[192]			=	"Previous Warnings: ";						// DISPLAYS WARNINGS AFTER - The pretext for the number of previous warnings
	$language[193]			=	"Time: ";									// DISPLAYS TIME AFTER - The pretext for the time of the report
	$language[194]			=	"The user was reported here";				// Displays in the report history where the user was reported
	$language[195]			=	"Are you sure you want to PERMANENTLY ban this user?  The user will have to be unbanned from the ArrowChat admin panel.";	// Prompt when the ban user option is clicked
	$language[196]			=	"Enter a reason for the warning.  THIS WILL BE SHOWN TO THE WARNED USER.";	// Prompt when after to enter a warning reason
	$language[197]			=	"This user has been warned in the past 24 hours.  Are you sure you want to warn again?";	// Prompt when the user has been warning in the past 24 hours
	$language[198]			=	"I Understand";								// The text that closes a warning notification
	$language[199]			=	"You have been warned by a moderator. Continued spam or abuse of the chat system could lead to a permanent ban. The reason that the moderator has given for the warning is below:";	
	
	// ######################### MOBILE CHAT #############################
	$language[110]			=	"Messenger";			// Displays in the header of the mobile chat
	$language[111]			=	"Online Users";			// Displays in the header for the online user list
	$language[112]			=	"Idle Users";			// Displays in the header for the idle user list
	$language[113]			=	"Back";					// Displays on the back button when viewing a chat
	$language[114]			=	"Send";					// Text for the send button
	$language[115]			=	"New";					// Text to display when a new message is received
	$language[116]			=	"You must login before using mobile chat";	// Text to display when user is not logged in using mobile
	$language[126]			=	"Home";					// Displays as a button to return to the website when in mobile chat
	$language[128]			=	"Chat Rooms";			// Displays in the header for the chat room list
	$language[129]			=	"Settings";				// Displays in the header for the settings
	$language[130]			=	"Show chat rooms list";	// The option to show chat rooms
	$language[131]			=	"Show idle user list";	// The option to show idle users
	$language[132]			=	"On";					// The on option for a toggle
	$language[133]			=	"Off";					// The off option for a toggle
	$language[138]			=	"Enter the room's password:";	// Text to display for the chat room password input
	$language[139]			=	"Enter Chat Room";		// The submit button to enter a chat room
	$language[145]			=	"Mobile Chat";			// The text to appear on mobile chat tab
	$language[176]			=	"Recent Chat";			// Displays in the header for the recent chat list

?>