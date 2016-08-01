<?php if ( !EM_ROBBY_AUTHORIZED ){ die( "Hacking Attempt: ". @$_SERVER[ 'REMOTE_ADDR' ] ); }
final class HC_Admin_events extends HC_Admin
{
	public static function section()
	{
		?><section class="em-menu-events em-menu-group" style="display:none;">

			<form method="post" target="_self" onsubmit="hc.loader(true);">
				<section class="dash_row">
					<div <?php echo ( ( @$_POST[ 'status' ] == HC_Constants::STATUS_PUBLISH )? 'class="active '.strtolower( HC_Constants::STATUS_PUBLISH ).'"' : '' );?>>
						<button class="tooltip" title="<?php _e( 'Display only live events', 'em-robby'); ?>" type="submit" name="status" value="<?php echo HC_Constants::STATUS_PUBLISH;?>">
							<h6><em class="publish"></em><?php _e( 'Live', 'em-robby'); ?></h6>
							<h2><?php echo self::$events_stats->PUBLISH;?></h2>
						</button>
					</div>
					<div <?php echo ( ( @$_POST[ 'status' ] == HC_Constants::STATUS_DRAFT )? 'class="active '.strtolower( HC_Constants::STATUS_DRAFT ).'"' : '' );?>>
						<button class="tooltip" title="<?php _e( 'Display only draft events', 'em-robby'); ?>" type="submit" name="status" value="<?php echo HC_Constants::STATUS_DRAFT;?>">
							<h6><em class="draft"></em><?php _e( 'Draft', 'em-robby'); ?></h6>
							<h2><?php echo self::$events_stats->DRAFT;?></h2>
						</button>
					</div>
					<div <?php echo ( ( @$_POST[ 'status' ] == HC_Constants::STATUS_DELETE )? 'class="active '.strtolower( HC_Constants::STATUS_DELETE ).'"' : '' );?>>
						<button class="tooltip" title="<?php _e( 'Display only deleted events', 'em-robby'); ?>" type="submit" name="status" value="<?php echo HC_Constants::STATUS_DELETE;?>">
							<h6><em class="delete"></em><?php _e( 'Deleted', 'em-robby'); ?></h6>
							<h2><?php echo self::$events_stats->DELETE;?></h2>
						</button>
					</div>
					<div <?php echo ( ( @$_POST[ 'status' ] == '' )? 'class="active all"' : '' );?>>
						<button class="tooltip" title="<?php _e( 'Display all events', 'em-robby'); ?>" type="submit" name="status" value="">
							<h6><b><?php _e( 'TOTAL', 'em-robby'); ?></b></h6>
							<h2 class="prc"><?php echo self::$events_stats->TOTAL;?></h2>
						</button>
					</div>
				</section>
			</form>

			<form method="post" target="_self" onsubmit="hc.loader(true);">
				<section class="nav_btns">
					<a class="btn confirm tooltip" title="<?php _e( 'Create an Event', 'em-robby' );?>" onclick="hc_admin_events.popup_create_event()"><i class="fa hc-plus"></i></a>
					<span class='bt_tableTools'></span>
					<input type="hidden" id="events-list-status" name="events-list-status" value="<?php echo ((strlen($_POST['events-list-status'])>0)?$_POST['events-list-status']:'');?>"/>
					<?php HC_Menus::get_events_status( 'events-list-status-menu', NULL, @$_POST['events-list-status'] );?>
				</section>
				<table id="events_grid" class="display" cellpadding="0" cellspacing="0" width="100%" style="display:none;"></table>
			</form>
		</section><?php
	}

}