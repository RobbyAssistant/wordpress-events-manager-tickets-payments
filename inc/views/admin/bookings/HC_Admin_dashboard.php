<?php if ( !EM_ROBBY_AUTHORIZED ){ die( "Hacking Attempt: ". @$_SERVER[ 'REMOTE_ADDR' ] ); }
class HC_Admin_dashboard extends HC_Admin
{
	private static function set_data()
	{
		$admin_url 				= admin_url();
		$ess_search_plugin_url 	= $admin_url . "plugin-install.php?tab=search&s=Events+Manager+ESS&plugin-search-input=Search+Plugins";

		$data_ = array(
			array(
				'completed' 	=> parent::$dashboard_[ 'EVENTS_MANAGER' ],
				'title'			=> ( ( parent::$dashboard_[ 'EVENTS_MANAGER' ] )? __( "Events Manager is instaled!", 'em-robby' ) : __( "Install Events Manager", 'em-robby' ) ),
				'description'	=> ( ( parent::$dashboard_[ 'EVENTS_MANAGER' ] )? "" : __( "You must install Events Manager Wordpress plugin to use ROBBY and start selling tickets for your events on your website.", 'em-robby' ) ),
				'link_url'		=> ( ( self::$dashboard_[ 'EVENTS_MANAGER' ] )? HC_Constants::PLUGIN_WEBSITE : '' ),
				'link_name'		=> __( "Events Manager", 'em-robby' ),
				'hide_validate' => TRUE
			),
			array(
				'completed' 	=> parent::$dashboard_[ 'ESS' ],
				'title'			=> ( ( parent::$dashboard_[ 'ESS' ] == FALSE )? __( "Install the ESS Plugin", 'em-robby' ) : __( "ESS Plugin installed!", 'em-robby' ) ),
				'description'	=> __( "The Events Manager ESS Plugin allows you to broadcast automatically your events to 3rd party websites. Your events published on WordPress will be sync with tickets seller portals. <a href='".HC_Constants::ESS_WEBSITE."' target='_blank'>plugin page</a>", 'em-robby' ),
				'link_url'		=> $ess_search_plugin_url,
				'link_name'		=> __( "Install ESS", 'em-robby' ),
				'hide_validate' => TRUE
			)
		);

		if ( parent::$dashboard_[ 'ROBBY_SYNC' ] )
		{
			$admin_event_url 			=  $admin_url . 'edit.php?post_type=' . ( defined( 'EM_POST_TYPE_EVENT' )? EM_POST_TYPE_EVENT : 'event' );
			$admin_finance_url 			= "javascript:hc_admin_bookings.goto_tab(\"finance\");";
			$admin_custom_tickets_url	= "javascript:hc_admin_bookings.goto_tab(\"custom-tickets\");";

			array_push( $data_,
				array(
					'completed' 	=> parent::$dashboard_[ 'EVENTS' ],
					'title'			=> ( ( parent::$dashboard_[ 'EVENTS' ] == FALSE )? __( "Create an Event", 'em-robby' ) : __( "Events created!", 'em-robby' ) ),
					'description'	=> __( "You have to create an event in order to sell tickets. Your events must have a valide date, price and location. If you already have events created, edit them and set your tickets in the booking section.", 'em-robby' ),
					'link_url'		=> $admin_event_url,
					'link_name'		=> ( ( self::$dashboard_[ 'ROBBY_SYNC' ] )? __( "Manage Events", 'em-robby' ) : "" ),
					'hide_validate' => TRUE
				),
				array(
					'completed' 	=> parent::$dashboard_[ 'BANK' ],
					'title'			=> ( ( parent::$dashboard_[ 'BANK' ] == FALSE )? __( "Bank Account info", 'em-robby' ) : __( "Bank Account Completed!", 'em-robby' ) ),
					'description'	=> __( "In order to receive payouts for your tickets sold, you need to complete your bank account information. You will receive the payment 7 weekdays after your event endday.", 'em-robby' ),
					'link_url'		=> $admin_finance_url,
					'link_name'		=> ( ( self::$dashboard_[ 'ROBBY_SYNC' ] )? __( "Bank Settings", 'em-robby' ) : "" ),
					'hide_validate' => TRUE
				),
				array(
					'completed' 	=> parent::$dashboard_[ 'TAXPAYER' ],
					'title'			=> ( ( parent::$dashboard_[ 'TAXPAYER' ] == FALSE )? __( "Taxpayer info", 'em-robby' ) : __( "Taxpayer Completed!", 'em-robby' ) ),
					'description'	=> __( "If you process over 200 orders and have not provided us with your taxpayer information, ROBBY is required to withhold on your payout until we receive this information. To avoid service interruptions, please fill out your taxpayer information now.", 'em-robby' ),
					'link_url'		=> $admin_finance_url,
					'link_name'		=> ( ( self::$dashboard_[ 'ROBBY_SYNC' ] )? __( "Taxpayer Settings", 'em-robby' ) : "" ),
					'hide_validate' => TRUE
				),
				array(
					'completed' 	=> parent::$dashboard_[ 'BILLING' ],
					'title'			=> ( ( parent::$dashboard_[ 'ROBBY_SYNC' ] == FALSE )? __( "Billing Address", 'em-robby' ) : __( "Billing Address Completed!", 'em-robby' ) ),
					'description'	=> __( "You have to complete your billing address information in order to receive invoices for your ticket sold. The billing address will be also displayed on your tickets receipts.", 'em-robby' ),
					'link_url'		=> $admin_finance_url,
					'link_name'		=> ( ( self::$dashboard_[ 'ROBBY_SYNC' ] )? __( "Billing Address", 'em-robby' ) : "" ),
					'hide_validate' => TRUE
				),
				array(
					'completed' 	=> parent::$dashboard_[ 'CUSTOM_TICKETS' ],
					'title'			=> ( ( parent::$dashboard_[ 'CUSTOM_TICKETS' ] == FALSE )? __( "Customize your Tickets", 'em-robby' ) : __( "Ticket Customized!", 'em-robby' ) ),
					'description'	=> __( "You have to complete your billing address information in order to receive invoices for your ticket sold. The billing address will be also displayed on your tickets receipts.", 'em-robby' ),
					'link_url'		=> $admin_custom_tickets_url,
					'link_name'		=> ( ( self::$dashboard_[ 'ROBBY_SYNC' ] )? __( "Customize now", 'em-robby' ) : "" ),
					'hide_validate' => TRUE
				)
			);
		}

		if ( parent::$dashboard_[ 'ESS' ] )
		{
			array_push( $data_,
				array(
					'completed' 	=> parent::$dashboard_[ 'ROBBY_SYNC' ],
					'title'			=> ( ( parent::$dashboard_[ 'ROBBY_SYNC' ] )? __( "ROBBY Sync!", 'em-robby' ) : __( "Sync your events with ROBBY.com", 'em-robby' ) ),
					'description'	=> __( "ROBBY.com gives you the ability to sell tickets, manage bookings, receive payments and boost your promotion. Your events and tickets are displayed on your Wordpress website and ticket reseller partners. More info on <a href='".HC_Constants::ROBBY_WEBSITE."' target='_blank'>robby.ai</a>", 'em-robby' ),
					'link_url'		=> "javascript:hc_admin_bookings.authorize();",
					'link_name'		=> ( ( self::$dashboard_[ 'ROBBY_SYNC' ] )? __( "Update Account", 'em-robby' ) : __( "Sync now", 'em-robby' ) ),
					'hide_validate' => FALSE
				)
			);
		}

		return $data_;
	}

	public static function section()
	{
		$completed = 0;

		$data_ = self::set_data();

		foreach ( $data_ as $step_ ) { if($step_['completed']==TRUE) $completed++; }

		?><section class="em-menu-dashboard em-menu-group">
			<div id="poststuff">
				<div class="signup-checklist">

					<section class="checklist-breakdown">
						<script type="text/javascript">
							var num_total = <?php echo intval( @count( $data_ ) );?>;
							var num_completed = <?php echo intval( $completed );?>;
						</script>
						<div class="checklist-chart" width="145" height="145"></div>
						<p>
					       <?php _e( "You've completed", 'em-robby'); ?>
						   <strong><?php echo intval( $completed ) . __( " of our list of ", 'em-robby') . intval( @count( $data_ ) ); ?></strong>
						   <?php _e("actions to activate the ROBBY plugin. Follow step by step each section and your tickets will be online in a minute!", 'em-robby' ); ?>
						</p>
					</section>

					<section class="checklist" style="display:none;">
						<ol><?php
						if ( @count($data_) > 0 )
						{
							foreach ( $data_ as $step_ )
							{
								?><li class="task hc-validated <?php echo ( ( $step_[ 'completed' ] == TRUE )? 'complete' : '' );?>">
									<h3><?php echo $step_[ 'title' ];?></h3><?php

								  	echo ( ( ( $step_[ 'description' ] != '' && $step_['completed'] == FALSE ) ||$step_[ "hide_validate" ] == FALSE )?
								  		"<p>".$step_[ 'description' ]."</p>"
										:
										''
									);

									echo ( ( $step_[ "link_url" ] != '' )?
								  		"<a target='_self' href='".$step_["link_url"]."' class='btn " . ( ( $step_[ "hide_validate" ] == FALSE && $step_['completed'] == TRUE )? 'cancel' : 'confirm' ) . "'>" .
								  			$step_[ "link_name" ] .
								  		"</a>"
										:
										''
									);?></li><?php
								}
							}
						?></ol>
					</section>
				</div>
			</div>
		</section><?php
	}


}