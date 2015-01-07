__author__ = 'Michelle & Sander'

from apscheduler.schedulers.blocking import BlockingScheduler
from subprocess import Popen, CREATE_NEW_CONSOLE
import time
#import logging
#logging.basicConfig()

sched = BlockingScheduler()
print("_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-")
print("Welcome, this timer is now operational")
print("Please do not close this window unless you want to stop this scheduling")
print("_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-")
print("")

# Deze scheduler draait altijd. Voor elke dag van de week start het script een cron job,
# om 11 uur 's avonds. Dit is een subprocess dat op de achtergrond gaat draaien. Tijdens
# het subproces wordt de website Computerstore.nl gecrawlt.
@sched.scheduled_job('cron', day_of_week='mon-sun', hour=23)
def timed_job():
    print(time.strftime("%H:%M:%S") + ' - Starting the Computerstore crawler')
    Popen(["python", "C:/Users/0881495/Desktop/Demo/CrawlerComputerstore.py"], creationflags=CREATE_NEW_CONSOLE)

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