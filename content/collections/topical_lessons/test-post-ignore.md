---
id: 04af9548-5eb1-4183-a9cb-d4977c8d7f10
published: false
blueprint: topical_lesson
title: 'Test Post ignore'
introduction:
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import pyperclip'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import pyautogui'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import time'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import datetime'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'start_time = datetime.datetime.now()'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: '# Define the source file path'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'source_file = r''C:\Users\AD9F95\Documents\ANICO\COBOL-Training\JXGCH154.cbl'''
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: '# Calculate the center of the screen'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'coordinate_x = 360'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'coordinate_y = 345'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'short_wait_time = 0.04'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'wait_time = 1.1'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: time.sleep(5)
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'pyautogui.moveTo(coordinate_x, coordinate_y)'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: time.sleep(0.5)
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: pyautogui.click()
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: time.sleep(0.5)
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "pyautogui.press('i')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: time.sleep(0.5)
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "pyautogui.press('enter')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: '# Open the source file and read each line'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "with open(source_file, 'r') as src:"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ for line in src:"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ # Copy each line to the clipboard"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ pyperclip.copy(line)"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ print(f\"Copied to clipboard: {line.strip()}\")"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ # Move the mouse cursor to the center of the screen"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ pyautogui.press('right')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ time.sleep(short_wait_time) \_# Delay in seconds"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ pyautogui.hotkey('shift', 'tab')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ time.sleep(short_wait_time) \_# Delay in seconds"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ pyautogui.hotkey('ctrl', 'v')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ time.sleep(short_wait_time) \_# Delay in seconds"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ pyautogui.press('enter')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ # Optional: Add a delay if needed"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ time.sleep(wait_time) \_# Delay in seconds"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'print("All lines copied to clipboard and pasted one by one")'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'current_time = datetime.datetime.now()'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'print(f"Current time: {start_time}")'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'print(f"End time: {current_time}")'
  -
    type: paragraph
    attrs:
      textAlign: left
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: '#Imports the contents of a file from the mainframe.'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "number_of_pages = 300 \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_ \_#a max to apply to number of pages"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "file_path = r'C:\\Users\\AD9F95\\Documents\\ANICO\\COBOL-Training\\DFSCSV1.jcl' \_ # Define the output file path"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'cutoffchars = 8;'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import pyperclip'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import pyautogui'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import time'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'import sys'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: '# Check if a command line argument is provided'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'if len(sys.argv) > 1:'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ # Save the first command line argument as a variable"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ file_name = sys.argv[1]"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ file_path = \_r'C:\\Users\\AD9F95\\Documents\\\\' + f\"{file_name}.jcl\""
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: '# Coordinates of a point in the mainframe interface'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'coordinate_x = 360'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'coordinate_y = 345'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'wait_time = 1'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'end_reached = False;'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'for i in range(number_of_pages):'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ pyautogui.moveTo(coordinate_x, coordinate_y)"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ time.sleep(0.5)"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ pyautogui.click()"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ time.sleep(0.5)"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ #Get all and copy"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ pyautogui.hotkey('ctrl', 'a')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ pyautogui.hotkey('ctrl', 'c')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ pyautogui.press('f8')"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ time.sleep(wait_time) \_# Delay in seconds"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ clipboard_content = pyperclip.paste()"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ clipboard_lines = clipboard_content.splitlines()"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ # Append the clipboard contents to the file"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ with open(file_path, 'a') as file:"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ for index, clipboard_line in enumerate(clipboard_lines):"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ \_ \_ if index < 4:"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ \_ \_ \_ \_ continue \_# Skip the first four instances"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ \_ \_ modified_line = clipboard_line[cutoffchars:] #remove first 8 characters to get rid of line numbers."
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ \_ \_ file.write(modified_line + \"\\n\")"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ \_ \_ if \"* Bottom of Data *\" in clipboard_line: #End program when we reach Bottom of Data"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ \_ \_ \_ \_ end_reached = True"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ \_ \_ \_ \_ break"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ for clipboard_line in clipboard_lines:"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ print(clipboard_line)"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: hardBreak
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ if end_reached:"
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: "\_ \_ \_ \_ break \_# End the outer loop"
updated_by: 1
updated_at: 1743608153
---
