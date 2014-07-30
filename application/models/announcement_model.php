<?php

class Announcement_model extends MY_Model{
		const DB_TABLE='announcements';
		const DB_TABLE_PK='IDANNOUNCEMENTS';

		public $IDANNOUNCEMENTS;
		public $ANNOUNCEMENT_TITLE;
		public $CONTENT;
		public $DATE_CREATED;
		public $CREATED_BY;
}