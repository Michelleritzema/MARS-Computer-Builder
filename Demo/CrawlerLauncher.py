__author__ = 'Michelle & Sander'

from apscheduler.schedulers.blocking import BlockingScheduler
import subprocess
import time
#import logging
#logging.basicConfig()

sched = BlockingScheduler()
print "_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-"
print "Welcome, this timer is now operational"
print "Please do not close this window unless you want to stop this scheduling"
print "_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-"
print ""

@sched.scheduled_job('cron', day_of_week='mon-sun', hour=23)
def timed_job():
    print('This job is run every day at 11pm.')
    print (time.strftime("%H:%M:%S"))
    subprocess.Popen(["python", "C:/Users/Michelle/PycharmProjects/MARS_website_crawler/CrawlerComputerstore.py"])

#@sched.scheduled_job('cron', day_of_week='mon-sun', hour=1)
#def timed_job():
    #print('This job is run every day at 1am.')
    #print (time.strftime("%H:%M:%S"))
    #subprocess.Popen(["python", "C:/Users/Michelle/PycharmProjects/MARS_website_crawler/----.py"])

#@sched.scheduled_job('cron', day_of_week='mon-sun', hour=3)
#def timed_job():
    #print('This job is run every day at 3am.')
    #print (time.strftime("%H:%M:%S"))
    #subprocess.Popen(["python", "C:/Users/Michelle/PycharmProjects/MARS_website_crawler/----.py"])

sched.start()