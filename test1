#!/usr/bin/env python3

import boto3
import datetime
import re





    # Create a Cost Explorer client
client = boto3.client('ce')

    # Set time range to cover the last full calendar month
    # Note that the end date is EXCLUSIVE (e.g., not counted)
now = datetime.datetime.utcnow()
    # Set the end of the range to start of the current month
end = datetime.datetime(year=now.year, month=now.month, day=1)
    # Subtract a day and then "truncate" to the start of previous month
start = end - datetime.timedelta(days=1)
start = datetime.datetime(year=start.year, month=start.month, day=1)
    # Get the month as string for email purposes
month = start.strftime('%Y-%m')

    # Convert them to strings
start = start.strftime('%Y-%m-%d')
end = end.strftime('%Y-%m-%d')


response = client.get_cost_and_usage(
        TimePeriod={
            'Start': start,
            'End':  end
        },
        Granularity='MONTHLY',
        Metrics=['BlendedCost'],
        GroupBy=[
            {
                'Type': 'TAG',
                'Key': 'Project'
            },
        ]
    )

    #pprint.pprint()

tsv_lines = []
for project in response["ResultsByTime"][0]["Groups"]:
        namestring = project['Keys'][0]
        

        amount = project['Metrics']['BlendedCost']['Amount']
        amount = float(amount)
        line = "${:,.2f}".format(amount)
        print("The Predicted cost of your account next month is " + line)
        tsv_lines.append(line)
