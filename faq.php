<?php require('parts/header.php'); ?>
<body>
    <?php require('parts/preloader.php'); ?>
    <div id="page" class="page">
        <?php require('parts/navbar.php'); ?>
        <?php require('parts/breadcrumb.php'); ?>
        <section class="pt-4 pb-80 faqs-3 inner-page-hero faqs-section division">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title title-01 mb-50">
                            <p class="fs-18 text-start m-0">Find comprehensive answers to common questions about MediaSane installation, system requirements, safety features, troubleshooting, and advanced usage scenarios for optimal photo/video organization performance.</p>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
                <div class="faqs-3-questions">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="accordion-wrapper">
                                <ul class="accordion">
                                    <li class="accordion-item is-active wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">1. What system requirements does MediaSane have?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane requires Python 3.12+ and PyQt6 for the GUI interface. Linux (Ubuntu/Debian recommended) is the primary platform, but it should also run on macOS/Windows with PyQt6 installed. ExifTool is optional but strongly recommended for accurate EXIF date extraction. The application needs minimal disk space for installation and requires a graphical desktop environment for operation. For optimal performance with large media collections, we recommend sufficient RAM for hashing operations and storage space for temp files during renaming. Network connectivity is not required for normal operation except for initial installation and updates.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">2. Is MediaSane safe to use on my media files?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Yes, MediaSane is designed with multiple safety layers. It includes a mandatory Dry-Run mode that shows exactly what will be renamed before any actual file operations occur. The application uses temporary file names during moves (with random suffixes like .tmp-uuid) before finalization to prevent data loss. Duplicate detection uses SHA-256 content hashing to ensure accuracy before deletion or moving. Cross-device operations use copy2 + unlink for safety. The interface provides Stop button control to halt operations instantly. MediaSane never modifies file content—only renames and organizes files based on metadata while preserving all original data.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">3. How does the Dry-Run feature work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>The Dry-Run feature is MediaSane's primary safety mechanism that scans and displays all planned rename operations without actually moving any files. When activated, it processes all selected media files, extracts dates from EXIF/metadata, generates new filenames with prefixes (IMG-, VID-), detects duplicates, and presents a detailed table showing original paths → planned new paths. This preview allows you to review exactly what would happen, identify any files you might want to keep separate, and adjust your preferences accordingly. The Dry-Run results include color-coded indicators for duplicate status and provide estimated time for hashing operations before execution.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">4. What types of files does MediaSane handle?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane supports comprehensive image and video formats. Image formats: jpg, jpeg, png, gif, tif, tiff, bmp, webp, heic, heif. Video formats: mp4, mov, m4v, avi, mkv, 3gp, webm. The application automatically detects file types and applies appropriate prefixes (configurable in Preferences). Unsupported file extensions are marked as "(unsupported)" in the operation table and skipped during processing. For recognized formats, MediaSane extracts dates through multiple methods: leading date in current filename, EXIF/metadata via exiftool, file modification time, and finally today's date as last resort. Each file is categorized as Image or Video for proper prefix application.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">5. How does duplicate detection work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane implements robust duplicate detection using SHA-256 content hashing with configurable time budgets (default 60s per file). It computes cryptographic hashes of file contents to identify identical files regardless of filename or metadata. If hashing exceeds the time budget or encounters I/O errors, it falls back to a weak key (size@mtime) plus a quick blake2b prefix hash to maintain responsiveness. Duplicates are either deleted (when "Keep duplicates" is unchecked) or moved to a .duplicates subfolder with unique naming (name, name.1, name.2). The application skips the .duplicates directory during scanning to avoid processing loops. This ensures accurate deduplication while maintaining performance.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">6. How are dates extracted from files?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane uses a hierarchical date resolution system for maximum accuracy. First, it checks for leading dates in the current filename (patterns like YYYYMMDD, YYYY-MM-DD). Then it attempts EXIF/metadata extraction using exiftool if available, checking DateTimeOriginal, CreateDate, MediaCreateDate, and FileModifyDate fields. If EXIF fails, it falls back to file system modification time (mtime). As a last resort, it uses today's date. Dates are formatted as YYYYMMDD in final filenames (e.g., IMG-20240421-00001.jpg). The application provides visual feedback in the operation table about which date source was used for each file, helping you understand the renaming logic.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">7. Can I customize the naming format?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Yes, MediaSane offers customization through its Preferences dialog (Edit → Preferences). You can configure Image Prefix (default "IMG-") and Video Prefix (default "VID-") to match your personal naming conventions. The date format is fixed as YYYYMMDD for consistency and sorting. The sequential number is automatically generated based on files processed in the same date batch. All preferences are saved to ~/.config/mediasane/config and persist between sessions. The application also remembers your last used source and output directories. While the core naming structure (prefix-date-number.extension) remains consistent, prefix customization allows personalization within that framework.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">8. What happens during file renaming/moving?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane implements safe file operations through multiple stages. First, files are moved to temporary names with random suffixes (e.g., .tmp- <uuid8>) in the destination directory. This prevents partial operations if interrupted. Then, files are finalized to their target names. If a destination file already exists, MediaSane appends _1, _2, etc., to avoid overwriting. For cross-device moves (different filesystems/mounts), it falls back to copy2 + unlink for safety. The operation table updates in real-time showing progress and results. All operations are atomic where possible, and the application maintains a consistent state throughout the process with rollback capabilities if stopped. </p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">9. Can I rename files in place or move elsewhere?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane supports both workflows. You can rename files in their current location by leaving the "Output" directory field empty—files will be renamed within the source directory. Alternatively, you can specify an output directory where renamed files will be moved (organized by the new naming structure). This is useful for consolidating media from multiple sources into a single organized directory. The application handles both scenarios with the same safety mechanisms. When using an output directory, you can choose whether to preserve the original directory structure (not currently implemented) or flatten all files into the target directory with the new naming scheme for unified organization.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">10. How does exiftool integration work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>ExifTool integration is optional but strongly recommended for accurate date extraction. MediaSane calls exiftool as a subprocess to read EXIF, XMP, IPTC, and other metadata from supported file formats. It queries multiple date fields in order of preference: DateTimeOriginal, CreateDate, MediaCreateDate, FileModifyDate. If exiftool is not installed or times out, MediaSane gracefully falls back to filename dates and file modification times. The application includes timeouts to prevent hanging on problematic files. ExifTool significantly improves date accuracy, especially for photos from digital cameras and smartphones that embed precise timestamp metadata not reflected in filenames or filesystem times.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">11. How are multiple date sources prioritized?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane uses a strict priority hierarchy for date resolution. Highest priority: Leading date patterns in the current filename (e.g., "20240421_vacation.jpg" → 2024-04-21). Second: EXIF/metadata dates via exiftool (DateTimeOriginal, CreateDate, etc.). Third: File system modification time (mtime). Last resort: Today's date. This hierarchy ensures the most accurate date is used when available. The application provides visual feedback about which source was used for each file in the operation table. This transparency helps users understand why particular dates were assigned and allows verification of the extraction logic, especially useful when files have inconsistent or incorrect metadata.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">12. What happens if I stop renaming mid-process?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane implements graceful interruption handling through its Stop button. When activated, the application immediately halts all file operations, completes any in-progress moves safely (using temp file finalization), and returns control to the interface. Files already processed remain in their new renamed locations. Files not yet processed remain in their original locations. The operation table shows clear status for each file: completed, pending, or stopped. There are no partial renames—each file operation is atomic. After stopping, you can review what was accomplished, adjust settings if needed, and restart the process. The application maintains consistency throughout with proper transaction boundaries.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">13. Does it work with network drives?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane works with network drives and cross-device scenarios through transparent fallback mechanisms. When moving files between different filesystems or mount points (including network shares), it automatically uses copy2 + unlink instead of direct rename operations. This ensures data integrity at the cost of some performance (copy overhead). The application handles permission differences and network timeouts gracefully. For large media collections on network drives, consider running Dry-Run first to assess timing and potential issues. Performance will depend on network speed and latency. Local operations (same filesystem) use efficient rename operations for maximum speed. The interface provides feedback about operation types being used.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">14. How are filename collisions handled?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane implements comprehensive collision avoidance. During planning, it ensures generated names don't conflict within the batch. During execution, if a target filename already exists (from previous runs or other sources), it appends _1, _2, etc., to create a unique name. This happens after temp file finalization, so the original file is never overwritten. The application also handles the edge case where the temp file itself might collide by using random UUID suffixes. Collision resolution is applied consistently, and the operation table shows the final resolved name for each file. This ensures no data loss from accidental overwrites while maintaining the organized naming structure as closely as possible.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">15. What logging and reporting features exist?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane provides comprehensive operation logging through the main interface table. Each file shows original path → new path/result with status indicators. Results include "(deleted)" for removed duplicates, "(unsupported)" for skipped files, or the new filename for successful renames. The application maintains session progress with counts of processed, renamed, deleted, and skipped files. While there's no external log file by default, the operation table serves as a complete audit trail. For debugging, you can check console output when running from source. The interface provides real-time progress bars and time estimates for hashing operations. All decisions (date source used, duplicate status, collision resolution) are visible in the table for transparency.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">16. Can I exclude specific files or folders?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane offers several exclusion mechanisms. You can manually skip files during the planning phase by reviewing the Dry-Run table. The application automatically skips the .duplicates folder to avoid processing loops. Unsupported file extensions (outside the allowed image/video formats) are marked and skipped. For directory-level exclusion, you can organize your source folder to contain only media files or use separate source selections. While there's no built-in pattern exclusion system, you can achieve similar results by preprocessing your folder structure. The application respects file permissions and will skip files it cannot read, providing appropriate feedback in the operation table for such cases.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">17. How is performance with large collections?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane is optimized for performance through several techniques. Hashing operations use configurable time budgets (default 60s per file) with fallback to weak keys to maintain responsiveness. EXIF extraction uses parallel processing where possible. The interface updates progressively to remain interactive during long operations. Performance depends on file count rather than total size—many small files may take longer than fewer large files due to per-file overhead. Storage type (SSD vs HDD) affects hashing speed. For very large collections, consider running Dry-Run first to assess timing, then execute in batches if needed. The application provides real-time progress indicators and time estimates to help manage expectations during processing.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">18. What about special characters in filenames?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>MediaSane handles special characters and Unicode filenames correctly throughout the process. Original filenames with special characters are displayed properly in the interface. Generated filenames use a safe subset: alphanumeric characters, hyphens, and underscores. The application preserves non-ASCII characters when they appear in original filenames for display purposes. During renaming, any problematic characters in source filenames don't affect the generated names, which follow the consistent prefix-date-number.extension pattern. Filesystem encoding is handled appropriately for your platform. The application has been tested with various international filename scenarios and should handle most real-world naming conventions encountered in photo/video collections.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">19. How do I troubleshoot issues?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Common issues typically involve missing dependencies or file permission problems. First, ensure Python 3.12+ and PyQt6 are installed correctly. Verify exiftool is available if EXIF extraction is important. For installation issues, check the DEB installation logs or pip output. Permission errors usually indicate read-only source files or write-protected destinations—check file ownership and permissions. If MediaSane freezes during hashing, the time budget may be too low for large files; consider increasing it or using weaker deduplication. Always run Dry-Run first to identify potential problems before execution. Check console output when running from source for detailed error messages. Our GitHub repository includes troubleshooting guidance for common scenarios.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item acc-last-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">20. Where can I get support or report issues?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Primary support is through our GitHub repository issue tracker for bug reports, feature requests, and questions. Before reporting, please check existing issues and the README documentation. Include detailed information: MediaSane version, operating system, Python version, exiftool version, error messages, and steps to reproduce. For installation problems, include installation method (DEB or source) and terminal output. For media processing issues, include file format examples and EXIF metadata samples (sanitized). The application's Dry-Run output provides useful debugging information. We maintain regular updates with improvements—subscribe to repository notifications or check releases for updates. Community contributions and feedback are always welcome.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="more-questions">
                            <p class="fs-18">Can't find the answer to your question?</p>
                            <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/mediasane/app/issues" class="btn btn-md r-08 btn--tra-black hover--purple">
                                <i class="fa-brands fa-github me-2"></i>
                                <span class="btn-text">
                                    <span class="anim-txt">Open GitHub Issue</span>
                                    <span class="anim-txt">Open GitHub Issue</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require('parts/cta.php'); ?>
        <?php require('parts/footer.php'); ?>
        <?php require('parts/scripts.php'); ?>
    </div>
</body>
</html>