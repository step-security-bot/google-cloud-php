# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import logging
from pathlib import Path
import subprocess

import synthtool as s
from synthtool.languages import php
from synthtool import _tracked_paths

logging.basicConfig(level=logging.DEBUG)

src = Path(f"../{php.STAGING_DIR}/Tasks").resolve()
dest = Path().resolve()

# Added so that we can pass copy_excludes in the owlbot_main() call
_tracked_paths.add(src)

php.owlbot_main(src=src, dest=dest)

# Use new namespace in the doc sample. See
# https://github.com/googleapis/gapic-generator/issues/2141
s.replace(
    'src/*/Gapic/CloudTasksGapicClient.php',
    r'Task_View',
    r'Task\\View')

# Change the wording for the deprecation warning.
s.replace(
    'src/*/*_*.php',
    r'will be removed in the next major release',
    'will be removed in a future release')

# V2 is GA, so remove @experimental tags
s.replace(
    'src/V2/**/*Client.php',
    r'^(\s+\*\n)?\s+\*\s@experimental\n',
    '')

# Fix missing formatting method
tasksBrokenGapics = [
    'src/V2beta3/Gapic/CloudTasksGapicClient.php',
    'src/V2beta2/Gapic/CloudTasksGapicClient.php',
    'src/V2/Gapic/CloudTasksGapicClient.php',
]
s.replace(
    tasksBrokenGapics,
    r"private static \$locationNameTemplate;\n\n\s{4}private static \$queueNameTemplate;",
    """private static $locationNameTemplate;
    private static $projectNameTemplate;

    private static $queueNameTemplate;"""
)
s.replace(
    tasksBrokenGapics,
    "private static function getQueueNameTemplate",
    """private static function getProjectNameTemplate()
    {
        if (null == self::$projectNameTemplate) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getQueueNameTemplate"""
)
s.replace(
    tasksBrokenGapics,
    r"'location' => self::getLocationNameTemplate\(\),\n\s{0,}'queue' => self::getQueueNameTemplate\(\),",
    """'location' => self::getLocationNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'queue' => self::getQueueNameTemplate(),"""
)
s.replace(
    tasksBrokenGapics,
    r"\/\*\*\n\s{5}\* Parses a formatted name string and returns an",
    """/**
     * Formats a string containing the fully-qualified path to represent
     * a project resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an"""
)

### [START] protoc backwards compatibility fixes

# roll back to private properties.
s.replace(
    "src/**/V*/**/*.php",
    r"Generated from protobuf field ([^\n]{0,})\n\s{5}\*/\n\s{4}protected \$",
    r"""Generated from protobuf field \1
     */
    private $""")

# Replace "Unwrapped" with "Value" for method names.
s.replace(
    "src/**/V*/**/*.php",
    r"public function ([s|g]\w{3,})Unwrapped",
    r"public function \1Value"
)

### [END] protoc backwards compatibility fixes

# fix relative cloud.google.com links
s.replace(
    "src/**/V*/**/*.php",
    r"(.{0,})\]\((/.{0,})\)",
    r"\1](https://cloud.google.com\2)"
)
