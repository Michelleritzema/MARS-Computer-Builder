__author__ = 'Michelle & Sander'

from apscheduler.schedulers.blocking import BlockingScheduler
import subprocess
import time
import logging
logging.basicConfig()

sched = BlockingScheduler()
print "Welcome, this timer is now operational"

@sched.scheduled_job('interval', minutes=1)
def timed_job():
    print('This job is run every one minute.')
    print (time.strftime("%H:%M:%S"))
    subprocess.Popen(["python", "C:/Users/Michelle/PycharmProjects/MARS_website_crawler/tst.py"])
    print "check"

@sched.scheduled_job('cron', day_of_week='mon-fri', hour=17)
def scheduled_job():
    print('This job is run every weekday at 5pm.')

sched.start()